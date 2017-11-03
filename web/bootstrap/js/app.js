var app = angular.module('starter', ['starter.controllers', 'starter.services']);
app.config(function($interpolateProvider, $stateProvider, $urlRouterProvider) {
    $interpolateProvider.startSymbol('||');
    $interpolateProvider.endSymbol('||');

   
});

function addCategory(name) {
    var refCat = firebase.database().ref('category');
    refCat.push({
        name
    });
}

function addQuestion(catId, value) {
    var refQuestion= firebase.database().ref('question');
    var question = {};

    question.categoryId=catId;
    question.value=value;

    refQuestion.push(question);
}


function addReponse(questId, value) {
    /*recuperation ou creation de la table*/
    var refRep= firebase.database().ref('reponse');
    var reponse = {
        questId,
        value
    };

    refRep.push(reponse);
}

function getReponses(questId) {
    var refRep= firebase.database().ref('reponse');

    return new Promise(function(resolve, reject) {
        refRep.orderByChild('questId').equalTo(questId).on('value', function (data) {
            var ret = data.val();

            resolve(ret);
        });
    });
}
function addChild() {
    var node = document.createElement("input");
    var textnode = document.createTextNode("Water");
    node.appendChild(textnode);
    document.getElementById("reponse").appendChild(node);
}