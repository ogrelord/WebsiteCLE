$(document).on('swipeleft', '.ui-page', function(event){
    if(event.handled !== true) // This will prevent event triggering more then once
    {
        var nextpage = $.mobile.activePage.next('[data-role="page"]');
        // swipe using id of next page if exists
        if (nextpage.length > 0) {
            $.mobile.changePage(nextpage, {transition: "slide", reverse: false}, true, true);
        }
        event.handled = true;
    }
    return false;
});

$(document).on('swiperight', '.ui-page', function(event){
    if(event.handled !== true) // This will prevent event triggering more then once
    {
        var prevpage = $(this).prev('[data-role="page"]');
        if (prevpage.length > 0) {
            $.mobile.changePage(prevpage, {transition: "slide", reverse: true}, true, true);
        }
        event.handled = true;
    }
    return false;
});

/*
als ochtend value 1 is ochtend thema 1
als ochtend value 1 is ochtend thema 2
als ochtend value 1 is ochtend thema 3

gaat per ochtend, niet per divs

if statement?
of for?
*/

/*
 var number = e.target.value;
 for (var i = 0; i <buttons.length; i++ ) {
 buttons[i].addEventListener('click', clickedItem);
 }
 */

var morning = document.getElementsByClassName("ochtend");
var midday = document.getElementsByClassName("middag");
var evening = document.getElementsByClassName("avond");

//console.log(morning);

// locate your element and add the Click Event Listener
document.getElementById("page1").addEventListener("click",function(e) {
    // e.target is our targetted element.
    // try doing console.log(e.target.nodeName), it will result LI
    if(e.target && e.target.nodeName == "LI") {
        //console.log(e.target.className + " " + e.target.value);
    }

    if (e.target.value == 1){
        document.getElementById("morning-vulca").style.display= 'inline' ;
        document.getElementById("midday-vulca").style.display= 'none' ;
        document.getElementById("evening-vulca").style.display= 'none' ;
    }

    if (e.target.value == 2){
        document.getElementById("morning-vulca").style.display= 'none' ;
        document.getElementById("midday-vulca").style.display= 'inline' ;
        document.getElementById("evening-vulca").style.display= 'none' ;
    }

    if (e.target.value == 3){
        document.getElementById("morning-vulca").style.display= 'none' ;
        document.getElementById("midday-vulca").style.display= 'none' ;
        document.getElementById("evening-vulca").style.display= 'inline' ;
    }
    //var li1 = $(this).children('li').get(0);
    //console.log(li1);
    //var li2 = $(this).children('li').get(1);
    //console.log(li2);
    //var li3 = $(this).children('li').get(2);
    //console.log(li3);
    //
    //var value = e.target()
    //
    //li1.addClass('active');
    //li2.removeClass('active');
    //li3.removeClass('active');
});

document.getElementById("page2").addEventListener("click",function(e) {
    // e.target is our targetted element.
    // try doing console.log(e.target.nodeName), it will result LI
    if(e.target && e.target.nodeName == "LI") {
        console.log(e.target.className + " " + e.target.value);
    }

    if (e.target.value == 4){
        document.getElementById("morning-juno").style.display= 'inline' ;
        document.getElementById("midday-juno").style.display= 'none' ;
        document.getElementById("evening-juno").style.display= 'none' ;
    }

    if (e.target.value == 5){
        document.getElementById("morning-juno").style.display= 'none' ;
        document.getElementById("midday-juno").style.display= 'inline' ;
        document.getElementById("evening-juno").style.display= 'none' ;

    }

    if (e.target.value == 6){
        document.getElementById("morning-juno").style.display= 'none' ;
        document.getElementById("midday-juno").style.display= 'none' ;
        document.getElementById("evening-juno").style.display= 'inline' ;

    }
});

document.getElementById("page3").addEventListener("click",function(e) {
    // e.target is our targetted element.
    // try doing console.log(e.target.nodeName), it will result LI
    if(e.target && e.target.nodeName == "LI") {
        console.log(e.target.className + " " + e.target.value);
    }

    if (e.target.value == 7){
        document.getElementById("morning-thaza").style.display= 'inline' ;
        document.getElementById("midday-thaza").style.display= 'none' ;
        document.getElementById("evening-thaza").style.display= 'none' ;
    }

    if (e.target.value == 8){
        document.getElementById("morning-thaza").style.display= 'none' ;
        document.getElementById("midday-thaza").style.display= 'inline' ;
        document.getElementById("evening-thaza").style.display= 'none' ;
    }

    if (e.target.value == 9){
        document.getElementById("morning-thaza").style.display= 'none' ;
        document.getElementById("midday-thaza").style.display= 'none' ;
        document.getElementById("evening-thaza").style.display= 'inline' ;
    }
});

var p1li1 = $('#page1').children('li').get(0);
var p1li2 = $('#page1').children('li').get(1);
var p1li3 = $('#page1').children('li').get(2);

$(p1li1).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p1li2).hasClass('active')){
        $(p1li2).toggleClass('active');
    }
    else{}
    if($(p1li3).hasClass('active')){
        $(p1li3).toggleClass('active');
    }
    else{}
});
$(p1li2).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p1li1).hasClass('active')){
        $(p1li1).toggleClass('active');
    }
    else{}
    if($(p1li3).hasClass('active')){
        $(p1li3).toggleClass('active');
    }
    else{}
});
$(p1li3).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p1li1).hasClass('active')){
        $(p1li1).toggleClass('active');
    }
    else{}
    if($(p1li2).hasClass('active')){
        $(p1li2).toggleClass('active');
    }
    else{}
});

var p2li1 = $('#page2').children('li').get(0);
var p2li2 = $('#page2').children('li').get(1);
var p2li3 = $('#page2').children('li').get(2);

$(p2li1).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p2li2).hasClass('active')){
        $(p2li2).toggleClass('active');
    }
    else{}
    if($(p2li3).hasClass('active')){
        $(p2li3).toggleClass('active');
    }
    else{}
});
$(p2li2).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p2li1).hasClass('active')){
        $(p2li1).toggleClass('active');
    }
    else{}
    if($(p2li3).hasClass('active')){
        $(p2li3).toggleClass('active');
    }
    else{}
});
$(p2li3).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p2li1).hasClass('active')){
        $(p2li1).toggleClass('active');
    }
    else{}
    if($(p2li2).hasClass('active')){
        $(p2li2).toggleClass('active');
    }
    else{}
});

var p3li1 = $('#page3').children('li').get(0);
var p3li2 = $('#page3').children('li').get(1);
var p3li3 = $('#page3').children('li').get(2);

$(p3li1).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p3li2).hasClass('active')){
        $(p3li2).toggleClass('active');
    }
    else{}
    if($(p3li3).hasClass('active')){
        $(p3li3).toggleClass('active');
    }
    else{}
});
$(p3li2).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p3li1).hasClass('active')){
        $(p3li1).toggleClass('active');
    }
    else{}
    if($(p3li3).hasClass('active')){
        $(p3li3).toggleClass('active');
    }
    else{}
});
$(p3li3).click(function(){
    if($(this).hasClass('active')){}
    else{
        $(this).toggleClass('active');
    }
    if($(p3li1).hasClass('active')){
        $(p3li1).toggleClass('active');
    }
    else{}
    if($(p3li2).hasClass('active')){
        $(p3li2).toggleClass('active');
    }
    else{}
});
