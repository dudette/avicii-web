$(document).ready(function(){$("a").on("click",function(e){if(""!==this.hash){e.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){window.location.hash=t})}})}),window.onscroll=function(){myFunction()};var header=document.getElementById("myHeader"),sticky=header.offsetTop;function myFunction(){window.pageYOffset>sticky?header.classList.add("sticky"):header.classList.remove("sticky")}function getTimeRemaining(e){var t=Date.parse(e)-Date.parse(new Date),n=Math.floor(t/1e3%60),i=Math.floor(t/1e3/60%60),a=Math.floor(t/36e5%24);return{total:t,days:Math.floor(t/864e5),hours:a,minutes:i,seconds:n}}function initializeClock(e,t){var n=document.getElementById(e),i=n.querySelector(".days"),a=n.querySelector(".hours"),o=n.querySelector(".minutes"),s=n.querySelector(".seconds");function l(){var e=getTimeRemaining(t);i.innerHTML=e.days,a.innerHTML=("0"+e.hours).slice(-2),o.innerHTML=("0"+e.minutes).slice(-2),s.innerHTML=("0"+e.seconds).slice(-2),e.total<=0&&clearInterval(r)}l();var r=setInterval(l,1e3)}var deadline="December 5 2019 16:00:00";initializeClock("clockdiv",deadline);for(var links=document.querySelectorAll(".ripplelink"),i=0,len=links.length;i<len;i++)links[i].addEventListener("click",function(e){var t=e.target,n=t.querySelector(".ink");n?n.classList.remove("animate"):((n=document.createElement("span")).classList.add("ink"),n.style.width=n.style.height=Math.max(t.offsetWidth,t.offsetHeight)+"px",t.appendChild(n)),n.style.left=e.offsetX-n.offsetWidth/2+"px",n.style.top=e.offsetY-n.offsetHeight/2+"px",n.classList.add("animate")},!1);