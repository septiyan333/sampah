/* when jQuery laods */
    $(document).ready(function() {
      /* click on back button - will do reset and removal of previously appended children */
      $('#back').on('click', function() {
        $('li.active').filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
        $('li').find('a[data-toggle="tab"]').removeClass('btn-success');
        $('#ok-icon').addClass('hidden');
        total_tickets = 0;
        $('#listed_t1').addClass('hidden').children().not('h4').remove();
        $('#listed_t2').addClass('hidden').children().not('h4').remove();
        $('#listed_t3').addClass('hidden').children().not('h4').remove();
        render();
      });
      /* click on continue button */
      $('#continue').on('click', function() {
        if (total_tickets > 0) {
    			$('li.active').filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
          $('li').find('a[data-toggle="tab"]').addClass('btn-success');
          $('#ok-icon').removeClass('hidden');
          addTicketList(t1);
          addTicketList(t2);
          addTicketList(t3);
        }
  		});
      render();
  	});
    /* VARIABLES */
    var total = 0;         // total amount to be paid
    var total_tickets = 0; // total amount of tickets
    var t1 = { id: 't1', pocet: 0, hodnota: 100 }; // ticket 1st category
    var t2 = { id: 't2', pocet: 0, hodnota: 350 }; // ticket 2nd category
    var t3 = { id: 't3', pocet: 0, hodnota: 800 }; // ticket 3rd category

    /* perform either adding or substracting on a provided object */
    calculate = function(object, action) {
      if (action === 'plus') {
        total += object.hodnota;
        object.pocet++;
      } else if ((action === 'minus') && (object.pocet > 0)) {
        total -= object.hodnota;
        object.pocet--;
      }
      render();
    }

    /* recalculate and display numbers + assigning hidden inputs */
    render = function() {
      total_tickets = t1.pocet + t2.pocet + t3.pocet;
      $('#amount').html(total.toFixed(0));
      $('#t1_pocet').html(t1.pocet); $('#t2_pocet').html(t2.pocet); $('#t3_pocet').html(t3.pocet);
      /* assigning hidden inputs */
      $('#total_amount').html(total.toFixed(0));
      $('#t1_amount').html(t1.pocet); $('#t2_amount').html(t2.pocet); $('#t3_amount').html(t3.pocet);

      if (total_tickets > 0) {
        $('#continue').prop('disabled', false);
      } else {
        $('#continue').prop('disabled', true);
      }
    }

    /* add a list of tickets if multiple tickets are selected, argument is a ticket category */
    addTicketList = function(objekt) {
      if (objekt.pocet > 1 || total_tickets > 1) {
        for (var i = 0; i < objekt.pocet; i++) {
          $('#listed_' + objekt.id).removeClass('hidden').append(insert(i+1));
        }
      }
    }

    /* insert a row if multiple ticket are selected, argument passed is a ticket count (for that section) */
    var insert = function(num) {
      return (
      "<div class='row'>"+
        "<div class='col-xs-1'><label for='row' class='p-top'><span class='ticket_span'>"+ num +"#</span></label></div>"+
        "<div class='col-xs-5'><input type='text' class='form-control' name='names[]' placeholder='Full name' required></div>"+
        "<div class='col-xs-6'><input type='email' class='form-control' name='emails[]' placeholder='anothername@gmail.com' required></div>"+
      "</div>");
    }