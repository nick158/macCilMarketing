//step 1 get the template / make the tempalate
var source = $("#entry-template").html();
var template = Handlebars.compile(source);
var context = {
    "title": "test",
    "body": "does it work?"
};
var compileHtml = template(context);
$("#content").html(compileHtml);
    