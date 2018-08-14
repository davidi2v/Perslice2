$(document).ready(function(){
    $('#carouselHacked').carousel();

   setInterval(function(){
       $('#banner p').addClass("bigEntrance");
    }, 1900);

/*-------------------------------------
| Logo Animation
-------------------------------------*/
   var logo = document.querySelector('a.navbar-brand img');
   logo.classList.add('logoAnime');

/*-------------------------------------
| Shop Quantity Control Buttons
-------------------------------------*/
    $('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /*-------------------------------------
    | Popup Nav Menu
    -------------------------------------*/
    // var menuBtn = document.querySelector('.navbar-toggle');
    // var overlay = document.createElement('div');
    // overlay.id = 'overlay';
    // overlay.style.width = 100 + 'vw';
    // overlay.style.height = 100 + 'vh';
    // overlay.style.backgroundColor = 'red';
    // overlay.style.position = 'fixed';
    // overlay.style.top = 0;
    // overlay.style.left = 0;
    // overlay.style.zIndex = 5;
    // overlay.style.opacity = 7\10;



   // menuBtn.addEventListener('click', function (e) {
   //    document.body.appendChild(overlay);
   //    console.log(e);
   // });


/*-------------------------------------
| On Scroll Animations
-------------------------------------*/
   $(window).scroll(function() {
		$('#shopHm').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});

		$('#specials .contentBox').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});

		$('#insta').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});

		$('#recipes').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});

		$('#socialBox').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+700) {
				$(this).addClass("slideUp");
			}
		});

		$('.howtoAnimation').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+700) {
				$(this).addClass("slideUp");
			}
		});

		$('.postCaption').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+700) {
				$(this).addClass("slideUp");
			}
		});
	});

   /*-------------------------------------
   | Contact Form Animation
   -------------------------------------*/
   var contactBtn1 = document.getElementById('contactBtn1');
   var contactBtn2 = document.getElementById('contactBtn2');
   var contactBtn3 = document.getElementById('contactBtn3');

   var contactTitle = document.querySelectorAll('h1.contactTitle');
   var option = document.getElementById('h1.contactTitle');
   var Options = document.getElementById('options');
   // console.log(contactTitle[0]);

   var contactForm = document.getElementById('contactForm');
   var retailForm = document.getElementById('retailForm');
   var distributionForm = document.getElementById('distributionForm');

   var retsailFormLink = document.getElementById('retailFormLink');
   var contactFormLink = document.getElementById('contactFormLink');
   var contactFormLink2 = document.getElementById('contactFormLink2');

   contactForm.style.display = 'none';
   retailForm.style.display = 'none';
   distributionForm.style.display = 'none';

   contactBtn1.addEventListener('click', buttonClicked);
   contactBtn2.addEventListener('click', buttonClicked2);
   contactBtn3.addEventListener('click', buttonClicked3);

   retailFormLink.addEventListener('click', retailLinkClicked);
   contactFormLink.addEventListener('click', contactLinkClicked);
   contactFormLink2.addEventListener('click', contactLinkClicked2);
   // distributorFormLink.addEventListener('click', distributorLinkClicked);

   function buttonClicked () {
      contactBtn2.style.display = 'none';
      contactBtn3.style.display = 'none';
      contactTitle[0].style.display = 'none';
      Options.style.marginBottom = '0';
      // contactForm.style.display = 'block';
      $(contactForm).fadeIn();

      this.className = "col-sm-12";
      // console.dir(this);
   }

   function buttonClicked2 () {
      contactBtn1.style.display = 'none';
      contactBtn3.style.display = 'none';
      contactTitle[1].style.display = 'none';
      Options.style.marginBottom = '0';
      // contactForm.style.display = 'block';
      $(retailForm).fadeIn();
      $(contactTitle).fadeOut();

      this.className = "col-sm-12";
      // console.dir(this);
   }

   function buttonClicked3 () {
      contactBtn1.style.display = 'none';
      contactBtn2.style.display = 'none';
      contactTitle[2].style.display = 'none';
      Options.style.marginBottom = '0';
      // contactForm.style.display = 'block';
      $(distributionForm).fadeIn();

      this.className = "col-sm-12";
      // console.dir(this);
   }

   function retailLinkClicked () {
      // $(contactBtn1).fadeOut();
      // $(contactBtn3).fadeOut();
      // $(contactBtn2).fadeIn();
      contactBtn1.style.display = "none";
      contactBtn3.style.display = "none";
      contactTitle[0].style.display = 'none';
      contactTitle[1].style.display = 'none';
      contactTitle[2].style.display = 'none';
      contactBtn2.style.display = "block";
      contactBtn2.className = "col-sm-12";
      $(contactForm).fadeOut();
      $(retailForm).fadeIn();
   }

   function contactLinkClicked () {
      // $(contactBtn2).fadeOut();
      // $(contactBtn3).fadeOut();
      // $(contactBtn1).fadeIn();
      contactBtn2.style.display = "none";
      contactBtn3.style.display = "none";
      contactTitle[0].style.display = 'none';
      contactTitle[1].style.display = 'none';
      contactTitle[2].style.display = 'none';
      contactBtn1.style.display = "block";
      contactBtn1.className = "col-sm-12";
      $(retailForm).fadeOut();
      $(contactForm).fadeIn();
   }

   function contactLinkClicked2 () {
      // $(contactBtn2).fadeOut();
      // $(contactBtn3).fadeOut();
      // $(contactBtn1).fadeIn();
      contactBtn2.style.display = "none";
      contactBtn3.style.display = "none";
      contactTitle[0].style.display = 'none';
      contactTitle[1].style.display = 'none';
      contactTitle[2].style.display = 'none';
      contactBtn1.style.display = "block";
      contactBtn1.className = "col-sm-12";
      $(retailForm).fadeOut();
      $(distributionForm).fadeOut();
      $(contactForm).fadeIn();
   }

   // function distributorLinkClicked () {
   //    $(contactBtn2).fadeOut();
   //    $(contactBtn2).fadeOut();
   //    $(contactBtn3).fadeIn();
   //    contactBtn1.className = "col-sm-12";
   //    $(contactForm).fadeIn();
   //    $(retailForm).fadeOut();
   // }




});