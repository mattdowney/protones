!function($){$(function(){$(".menu-toggle").on("click",function(){$(".full-menu").toggleClass("full-menu-open")})}),$(window).scroll(function(){var n=$(window).scrollTop(),t=$(document).height(),o=$(window).height(),i=n/(t-o)*100;$(".scroll-line").css("width",i+"%")});var n="http://mattdowney.co/",t=["ringtone-snippets.mp3"];$("button.listen").click(function(){var o=$(this).attr("id").substring(1);new Audio(n+t[o-1]).play()}),$(document).ready(function(){$("iframe#download").attr("src","http://protones.co/wp-content/files/protones-fall-2016.zip")})}(jQuery);