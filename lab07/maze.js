/* CSE3026 : Web Application Development
 * Lab 09 - Maze
 */
"use strict";

var loser = null;  // whether the user has hit a wall

window.onload = function() {
    $("start").observe("click", startClick);
};

// called when mouse enters the walls; 
// signals the end of the game with a loss
function overBoundary(event) {
    var walls=$$(".boundary");
    for(var i=0;i<walls.length;++i){
        walls[i].addClassName("youlose");
    }
    loser=true;
    $("status").innerHTML="You Lose!";
    var walls=$$(".boundary");
    for(var i=0;i<walls.length;++i){
        walls[i].stopObserving();
    }
    $("end").stopObserving();
    document.body.stopObserving();
}

// called when mouse is clicked on Start div;
// sets the maze back to its initial playable state
function startClick() {
    var walls=$$(".boundary");
    $("status").innerHTML='Click the "S" to begin.';
    if(loser==null){
        for(var i=0;i<walls.length;++i){
            walls[i].observe("mouseover", overBoundary);
        }
    }else{
        loser=null;
        for(var i=0;i<walls.length;++i){
            walls[i].removeClassName("youlose");
            walls[i].observe("mouseover", overBoundary);
        }
    }
    $("end").observe("mouseover",overEnd);
    document.body.observe("mouseover",overBody);
}

// called when mouse is on top of the End div.
// signals the end of the game with a win
function overEnd() {
    if(loser!=null)return;
    $("status").innerHTML="You Win!";
    loser=false;
    var walls=$$(".boundary");
    for(var i=0;i<walls.length;++i){
        walls[i].stopObserving();
    }
    $("end").stopObserving();
    document.body.stopObserving();
}

// test for mouse being over document.body so that the player
// can't cheat by going outside the maze
function overBody(event) {
    alert(event.element().tagName);
    if(event.element().tagName=="BODY"){
        overBoundary();
    }
}