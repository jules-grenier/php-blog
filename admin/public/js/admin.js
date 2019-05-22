$(document).ready(function(){

    $('#addTags #h1').click(function(){
       $('textarea.postContent').append('&lt;h1&gt;&lt;/h1&gt;');
    });

    $('#addTags #h2').click(function(){
       $('textarea.postContent').append('&lt;h2&gt;&lt;/h2&gt;');
    });

    $('#addTags #h3').click(function(){
       $('textarea.postContent').append('&lt;h3&gt;&lt;/h3&gt;');
    });

    $('#addTags #h4').click(function(){
       $('textarea.postContent').append('&lt;h4&gt;&lt;/h4&gt;');
    });

    $('#addTags #h5').click(function(){
       $('textarea.postContent').append('&lt;h5&gt;&lt;/h5&gt;');
    });

    $('#addTags #h6').click(function(){
       $('textarea.postContent').append('&lt;h6&gt;&lt;/h6&gt;');
    });

    $('#addTags #p').click(function(){
       $('textarea.postContent').append('&lt;p&gt;&lt;/p&gt;');
    });

    $('#addTags #span').click(function(){
       $('textarea.postContent').append('&lt;span&gt;&lt;/span&gt;');
    });

    $('#addTags #blockquote').click(function(){
       $('textarea.postContent').append('&lt;blockquote&gt;&lt;/blockquote&gt;');
    });

    $('#addTags #hr').click(function(){
       $('textarea.postContent').append('&lt;hr&gt;&lt;/hr&gt;');
    });

    $('#addTags #br').click(function(){
       $('textarea.postContent').append('&lt;br&gt;&lt;/br&gt;');
    });

});