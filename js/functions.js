$(".nav > li").click(function(e){
	$(this).children("ul").slideToggle();
	$(this).siblings().children("ul").slideUp();
});
$("#sidebar").mouseleave(function(){
	$(".nav > li").children("ul").slideUp();
});
$(".order").click(function(){
	if($(this).text()=='Ascending')
		$(this).text()='Descending';
	else
		$(this).text()='Ascending';
	alert($(this).text());
});
$(".toggleview").click(function(){
	if($("#studentlist").hasClass("itemgrid")){
		$("#container").children("#studentlist").addClass("itemlist").removeClass("itemgrid");
		$(this).css("background-image","url('css/img/list.png')");
	}
	else{
		$("#container").children("#studentlist").addClass("itemgrid").removeClass("itemlist");
		$(this).css("background-image","url('css/img/grid.png')");
	}
})