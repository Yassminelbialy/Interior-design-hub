$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
    $("#contacts").toggleClass("expanded");
    console.log('dddddd')
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");

	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};

	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	if(myfile ){
		var reader = new FileReader();
		reader.onload=function(e){
		$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>'+
		'<img src="'+e.target.result+'" style="width: 200px;height:200px;"/><br>'
		+ message + '</p></li>').appendTo($('.messages ul'));
	    console.log(e.target.result)}
		reader.readAsDataURL(myfile);
		
	}else{
		$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>'+
		 message + '</p></li>').appendTo($('.messages ul'));
	}
	sendToServer(message);
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});



$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
function sendToServer(message){
	$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
// hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
	var myform= new FormData();
	myform.append("writter",message);
	myform.append("body",message);
	myform.append("img",message);
if(myfile){
    myform.append('file',myfile)
}
	$.ajax({
		url: "http://localhost:8000/chat",
		dataType: 'script',
		cache: false,
		contentType: false,
		processData: false,
		data: myform, // Setting the data attribute of ajax with file_data
		type: 'POST',
		success:function(data){
		x=JSON.parse(data);
		console.log(x)}
    })///ajax
    console.log("##########"+myfile)

}
myfile='';

$('#attachment').click(()=>{
        console.log('sss');
        document.getElementById('file1').click();


})
$('#file1').change((a)=>{
    console.log('s')
   myfile = a.target.files[0]
})
