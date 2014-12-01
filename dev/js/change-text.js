jQuery(document).ready(




  function($) {
    $('.order-comment').html('Geef je meerdere mensen op? Vul dan de geboortedatum en BSN nummer van de andere personen hieronder in');
    $('#invoice').val('Aanmelden');
    $('.control-label[for="VATnumber"]').html('BSN nummer:');
    $('.control-label[for="companyName"]').html('Geboortedatum:');
    $('.checkout-right .row-fluid:nth-of-type(2)').hide();
    $('.ordercomment-title').html('Extra gegevens');
    var i = 0;
    $('.subtotal-row').each(function() {
      if (i < 2) {
        $(this).hide();
      }
      i++;
    });




    var moveMe = $('#order-form .span6:nth-of-type(1) .control-group:nth-of-type(1)');
    var destination = $('#order-form .span6:nth-of-type(1) .control-group:nth-of-type(8)');
    destination.after(moveMe);

    var moveMe2 = $('#order-form .span6:nth-of-type(1) .control-group:nth-of-type(11)');
    var destination2 = $('#order-form .span6:nth-of-type(1) .control-group:nth-of-type(8)');
    destination2.after(moveMe2);

    $('select[name="payment-method"]').val('ideal-targetpay');
    $('.ideal-group').removeClass('hidden');
    $('#payment-text').parent('.control-group').hide();

    $('.ProductOptionSelector').each(function() {

      if ($(this).attr('option_id') != '769' &&
        $(this).attr('option_id') != '770' &&
        $(this).attr('option_id') != '771'
      ) {
        $(this).val('286357');
      }
    });


    var sortDates = function() {
      $('.ProductOptionSelector').each(function() {
        if ($(this).attr('option_id') == '769' ||
          $(this).attr('option_id') == '770' ||
          $(this).attr('option_id') == '771'
        ) {
          var selectList = $(this).children('option');

          var months = {
            'januari': 'January',
            'februari': 'February',
            'maart': 'March',
            'april': 'April',
            'mei': 'May',
            'juni': 'June',
            'juli': 'July',
            'augustus': 'August',
            'september': 'September',
            'oktober': 'October',
            'november': 'November',
            'december': 'December'
          };

          selectList.sort(function(a, b) {
            var parseDate = function(str) {

              var pieces = str.split(',');

              if (pieces.length == 0) {
                return new Date();
              }

              var d = pieces[0].trim();
              var pieces2 = d.split(' ');
              var day = pieces2[1];
              var dutchMonth = pieces2[2];
              var year = pieces2[3];

              var dateString = day + " " + months[dutchMonth] + ", " + year;
              var ret = Date.parse(dateString);
              return ret;
            };
            var timestampA = parseDate($(a).html());
            var timestampB = parseDate($(b).html());

            return timestampA - timestampB;

          });

          $(this).html(selectList);
          $(this).children('option').first().attr("selected", "selected");

        }
      });

    }

    sortDates();
  }
);
