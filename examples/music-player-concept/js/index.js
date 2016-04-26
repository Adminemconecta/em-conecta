var songs = [{
  "title": "Hello",
  "artist": "Adelle",
  "pic": "http://static.dnaindia.com/sites/default/files/2015/10/23/387996-adele.jpg",
  "duration": 300
}, {
  "title": "The Hills",
  "artist": "The Weeknd",
  "pic": "http://www.republicrecords.com/wp-content/uploads/2015/05/the-weeknd_the-hills-300x300.jpg",
  "duration": 300
}, {
  "title": "Here",
  "artist": "Alessia Cara",
  "pic": "http://cps-static.rovicorp.com/3/JPG_400/MI0003/860/MI0003860708.jpg?partner=allrovi.com",
  "duration": 300
}, {
  "title": "Hotline Bling",
  "artist": "Drake",
  "pic": "https://static1.squarespace.com/static/5571af77e4b01f1b467df078/55dd8058e4b0df55a96d4963/55f2cd26e4b01ed5bc4279ac/1442924079116/?format=1000w",
  "duration": 300
}];
var update, repeat = false,
  shuffle = false,
  progress = 0,
  index = 0,
  play = false;

function init(index) {
 $('.time').children('.right').html(getTime(songs[index].duration));
  $('.frame').html('<img class="pic" src="'+songs[index].pic+'"/><div class="details"><span class="title">'+songs[index].title+'</span><span class="artist">'+songs[index].artist+'</span></div>');
}

function getIndex() {
  if (index >= songs.length) {
    index = 0;
  } else if (index < 0) {
    index = songs.length - 1;
  }
  return index;
}

function getTime(value) {
  var min = Math.floor(value / 60);
  var sec = Math.floor(value - min * 60);
  if(sec<10){
    sec = "0" + sec;
  }
  return min + ":" + sec;
}

$('#next').click(function() {
  played();
  index = index + 1;
  progress = 0;
  init(getIndex());
  played();
});

$('#prev').click(function() {
  played();
  index = index - 1;
  progress = 0;
  init(getIndex());
  played();
});

$('#play').click(function() {
  played();
});

function played() {
  $('#play').toggleClass('is-played');
  $('#play').children('i').toggleClass('zmdi-play');
  $('#play').children('i').toggleClass('zmdi-pause');
  if (play === false) {
    play = true;
    update = window.setInterval(progression, 1000);
  } else {
    play = false;
    clearInterval(update);
  }
}

function progression() {
  if (progress >= 99) {
    played();
    index = index + 1;
    progress = 0;
    init(getIndex());
    played();
  } else {
    progress = progress + (100 / songs[getIndex()].duration);
    $('.time').children('.left').html(getTime(progress * (songs[getIndex()].duration) / 100));
    $('.progress').css('width', progress + "%");
  }
}

$('.feature').click(function(e) {
  $(this).children('i').toggleClass('mdc-text-orange');
});

// Ripple effect
var target, ink, d, x, y;
$(".fab").click(function(e) {
  target = $(this);
  //create .ink element if it doesn't exist
  if (target.find(".ink").length === 0)
    target.prepend("<span class='ink'></span>");

  ink = target.find(".ink");
  //incase of quick double clicks stop the previous animation
  ink.removeClass("animate");

  //set size of .ink
  if (!ink.height() && !ink.width()) {
    //use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
    d = Math.max(target.outerWidth(), target.outerHeight());
    ink.css({
      height: d,
      width: d
    });
  }

  //get click coordinates
  //logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
  x = e.pageX - target.offset().left - ink.width() / 2;
  y = e.pageY - target.offset().top - ink.height() / 2;

  //set the position and add class .animate
  ink.css({
    top: y + 'px',
    left: x + 'px'
  }).addClass("animate");
});

init(index);