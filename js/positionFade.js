/* Mihrtec LLC, 2016 */

/* Config */
var fadeApex = 0.24;
var fadeSize = 0.14;
var throttleTime = 0.05;

var styletext = "filter: grayscale(%); -webkit-filter: grayscale(%); -moz-filter: grayscale(%); -o-filter: grayscale(%); -ms-filter: grayscale(%);";
var replaceReg = new RegExp('%','g');

/******************************************************************************/
var bodySize = 0.01;
var faders;
var next;

function positionFadeResize(event)
{ var bodyFrame = document.body.getBoundingClientRect();
  bodySize = Math.max(bodyFrame.bottom - bodyFrame.top, 0.01);
}

function positionFadeScroll(event)
{ for (var i = 0; i < faders.length; i++)
  { var relativeDistanceToApex = Math.abs(faders[i].getBoundingClientRect().top/bodySize - fadeApex);
    var grayness = Math.min(relativeDistanceToApex < fadeSize ? 0.0 : relativeDistanceToApex/0.55, 1.0);
    faders[i].style.cssText = styletext.replace(replaceReg,grayness);
  }
}

/* Throttles move events so they only call scroll every throttleTime seconds */
function positionFadeMove(event)
{ var now = +new Date;
  if (now >= next)
    positionFadeScroll(event);
}

function positionFadeLoad(event)
{ next = +new Date + throttleTime;
  faders = document.getElementsByClassName("fader");
  if (faders.length > 0)
  { positionFadeResize();
    positionFadeScroll();
    window.addEventListener("resize", positionFadeResize);
    window.addEventListener("scroll", positionFadeScroll);
    window.addEventListener("touchmove", positionFadeMove);
  }
}

window.addEventListener("load", positionFadeLoad);
