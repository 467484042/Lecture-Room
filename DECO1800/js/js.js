var slideIndex = 1;

function plusSlides(n) {
	showSlides((slideIndex += n));
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var btn = document.getElementById("startBtn");
	btn.style.display = "none";
	var arrow = document.getElementById("arrow");
	arrow.style.display = "block";
	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}

	slides[slideIndex - 1].style.display = "block";
	var popImg = document.getElementsByClassName("popImg");

	for (i = 0; i < popImg.length; i++) {
		popImg[i].style.display = "none";
	}
	popImg[slideIndex - 1].style.display = "block";
}

function iterateRecords(data) {
	console.log(data);

	$.each(data.result.records, function(recordKey, recordValue) {
		var recordTitle = recordValue["title"];
		var recordImage = recordValue["500_pixel"];
		var recordDescription = recordValue["decsription"];
		var recordBigImage = recordValue["1000_pixel"];

		if (recordTitle && recordImage.endsWith(".jpg") && recordDescription) {
			$("#boardImg").append(
				$('<div class="mySlides">').append($("<img>").attr("src", recordBigImage))
			);
			$(".popboard").append(
				$('<figure class="popImg">').append(
					$("<h3>").text(recordTitle),
					$("<img>").attr("src", recordBigImage),
					$('<p class="aa">').text(recordDescription)
					
				)
			);

			$(".storyboard").append(
				$('<figure class="storycontent">').append(
					$('<h3>').text(recordTitle),
					$('<img>').attr("src", recordImage),
					$('<p class="aa">').text(recordDescription)
					
				)
			);
		}
	});

	var regx=/^[a-zA-Z\d]+$/;
	$(".aa").lettering('words');
	$('.aa').dblclick(function(event) {
    var word=event.target.innerHTML;
	word=word.replace(/[\ |\~|\`|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\-|\_|\+|\=|\||\\|\[|\]|\{|\}|\;|\:|\"|\'|\,|\<|\.|\>|\/|\?]/g,""); 
	var trimword=word.trim();
	if(trimword==word){
		if(trimword.match(regx)){
			var wordToLookUp=trimword;
			var url1="https://api.wordnik.com/v4/word.json/"+wordToLookUp+"/definitions?limit=200&includeRelated=false&sourceDictionaries=all&useCanonical=false&includeTags=false&api_key=24895354e27238a6ad19304556204ac55caf86d4b11355413";
			var settings = {
				"async": true,
				"crossDomain": true,
				"url":url1,
				"method": "GET",
				"headers": {
				  "cache-control": "no-cache",
				  "postman-token": "a205be0d-f28f-f412-8ac3-16b448b9c5c4"
				}
			  };

			$.ajax(settings).done(function (response) {
				console.log(response);
				if(response.length>2){
					alert(trimword+" : "+"\n"+"1. "+response[0].text+"\n"+"2. "+response[1].text);
				}else if(response.length>1){
					alert(trimword+" : "+"\n"+"1. "+response[0].text);
				}else{
					alert(trimword+" : "+"\n"+"Sorry! no definitions")
				}
			  });
			  
		}
	}
});

}

$(document).ready(function() {
	var data1 = {
		resource_id: "5bc00f98-2d96-47d6-a0ca-2089ebd1130d",
		limit: 100
	};

	$.ajax({
		url: "https://data.gov.au/api/3/action/datastore_search",
		data: data1,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data1) {
			console.log(data1);
			iterateRecords(data1);
		}
	});

	$("body").addClass("js");

	$("#showmore, #imgPopup .close-button a").click(function(event) {
		$("body").toggleClass("show-imgPopup");
		event.preventDefault();
	});


	$("#video-board a, #video-board-popup .close-button a").click(function(
		event
	) {
		$("body").toggleClass("show-video-board-popup");
		event.preventDefault();
	});

	$("#storyBoard a, #story-board-popup .close-button a").click(function(
		event
	) {
		$("body").toggleClass("show-story-board-popup");
		event.preventDefault();
	});
	$(".btn_div").on("click", function(e) {
		var left = $(window).width() / 2 - 800 / 2;
		var top = $(window).height() / 2 - 500 / 2;
		window.open(
			"game.php",
			"popup",
			"width=800,height=500, top=" + top + ", left=" + left
		);
	});
});
