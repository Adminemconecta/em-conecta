'use strict';

var knob = $('.knob-value');
var knobProgress = $('.knob-value-progress');
var contrastProgress = $('#contrast-progress');
var contrastIndicator = $('.knob-indicator.contrast');
var brightnessProgress = $('#brightness-progress');
var brightnessIndicator = $('.knob-indicator.brightness');

var draggedIndicator = null;

setKnobValue(45, true);
setContrast(40);
setBrightness(70);

$(document).on('click', '.knob-arrow', function (e) {
    e.stopPropagation();
    var knobValue = +knob.text();
    if ($(this).is('.up') && knobValue < 100) {
        setKnobValue(knobValue + 1);
    } else if ($(this).is('.down') && knobValue > 0) {
        setKnobValue(knobValue - 1);
    }
});

$(document).on('click', knobInteract);

$(document).on('mousedown', '.knob-indicator', function () {
    draggedIndicator = $(this);
});

$(document).on('mousemove', function (e) {
    if (draggedIndicator) {
        knobInteract(e);
    }
});

$(document).on('mouseup', function () {
    draggedIndicator = null;
});

function knobInteract(e) {
    var origin = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2
    };
    var target = { x: e.pageX, y: e.pageY };
    var angle = angleBetween(origin, target);
    angle = (angle + 90) % 360;
    if (angle > 3 && angle < 177) {
        var contrast = (angle - 3) / 174 * 100;
        setContrast(contrast);
    } else if (angle > 183 && angle < 357) {
        var brightness = 100 - (angle - 183) / 174 * 100;
        setBrightness(brightness);
    }
}

function setKnobValue(value) {
    var initial = arguments.length <= 1 || arguments[1] === undefined ? false : arguments[1];

    knob.text(value);
    knobProgress.css('height', value + '%');
}

function setContrast(value) {
    var totalLength = contrastProgress[0].getTotalLength();
    var percentage = value / 100;
    var progress = totalLength - totalLength * percentage;
    var angle = 174 * percentage + 93;
    var indicator = getPointAtAngleFrom({ x: 0, y: 0 }, angle, 142);
    contrastProgress.css('stroke-dashoffset', progress);
    contrastIndicator.css('transform', ['translateX(' + indicator.x + 'px)', 'translateY(' + indicator.y + 'px)'].join(' '));
}

function setBrightness(value) {
    var totalLength = brightnessProgress[0].getTotalLength();
    var percentage = value / 100;
    var progress = totalLength - totalLength * percentage;
    var angle = 174 - (174 * percentage + 87);
    var indicator = getPointAtAngleFrom({ x: 0, y: 0 }, angle, 142);
    brightnessProgress.css('stroke-dashoffset', progress);
    brightnessIndicator.css('transform', ['translateX(' + indicator.x + 'px)', 'translateY(' + indicator.y + 'px)'].join(' '));
}

function getPointAtAngleFrom(origin, angle, distance) {
    angle = deg2rad(angle);
    return {
        x: origin.x + Math.cos(angle) * distance,
        y: origin.y + Math.sin(angle) * distance
    };
}

function deg2rad(angle) {
    return angle * (Math.PI / 180);
}

function rad2deg(angle) {
    return angle * (180 / Math.PI);
}

function angleBetween(origin, target) {
    var dy = target.y - origin.y;
    var dx = target.x - origin.x;
    var angle = rad2deg(Math.atan(dy / dx));
    if (angle < 0 && dy < 0) {
        return 180 + angle;
    } else if (angle < 0 && dy >= 0) {
        return 360 + angle;
    } else if (dx > 0) {
        return 180 + angle;
    }
    return angle;
}