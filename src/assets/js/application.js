(function($) {
    var changedFlag = {};
    var hadFocusFlag = {};
    $(function(){
        $('[type=checkbox]').on('change', function(e) {
            var $elm = $(e.target),
                $label = $elm.parent('label');

            if($elm.is(':checked')) $label.addClass('checked');
            else                    $label.removeClass('checked');
        });

        $('input')
            .on('focus', function(e) {
                var name = $(e.target).attr('name');

                if(!hadFocusFlag[name]) {
                    hadFocusFlag[name] = true;
                    ga('send', 'event', 'application', name + ' had focus', 'unspecified platform');
                }
            })
            .on('change', function(e) {
                var name = $(e.target).attr('name');

                if(!changedFlag[name]) {
                    changedFlag[name] = true;
                    ga('send', 'event', 'application', name + ' had changed', 'unspecified platform');
                }

            });

        $('input:not([type=submit]), textarea')
          .on('focus', function(e) {
              $(e.target).parent('label')
                .addClass('focus');
          })
          .on('blur', function(e) {
              $(e.target).parent('label').removeClass('focus');
          })
          .on('keypress', function(e) {
            $(e.target).parent('label').removeClass('error');
          });

        $('form').on('submit', function (e){

            var cur = $(e.currentTarget);
            $('.error').removeClass('error');

            $.ajax({
                url: cur.attr('action'),
                type: cur.attr('method'),
                data: $(cur).serialize(),
                dataType: "JSON",
                success: function (req){

                    if(req.success) {
                        $('input[type=text], input[type=url], input[type=email], input[type=tel], textarea')
                              .val('')
                              .attr('disabled', 'disabled')
                            .parent('label')
                              .addClass('disabled');

                        $('input[type="checkbox"]')
                              .removeAttr('checked')
                              .attr('disabled', 'disabled')
                            .parent('label')
                              .removeClass('checked')
                              .addClass('disabled');

                        $('input[type=submit]')
                              .val('Success!')
                              .attr('disabled', 'disabled')
                              .animate({
                                opacity: 0
                              })
                            .after(
                                $('<p>')
                                .text('Thank you for applying. We will get back to you by email on February 17th.')
                            );

                    } else {
                        switch (req.message) {
                            case 'error_1' :
                                console.log('Invalid first name.');
                                $('[name=fname]').parent().addClass('error').focus();
                                break;
                            case 'error_2' :
                                console.log('Invalid last name.');
                                $('[name=lname]').parent().addClass('error').focus();
                                break;
                            case 'error_3' :
                                console.log('Invalid phone number.');
                                $('[name=phone]').parent().addClass('error').focus();
                                break;
                            case 'error_4' :
                                console.log('Invalid email address.');
                                $('[name=email]').parent().addClass('error').focus();
                                break;
                            case 'error_5' :
                                console.log('Motivation too short.');
                                $('[name=motivation]').parent().addClass('error').focus();
                                break;
                            case 'error_6' :
                                console.log('You have not filled in a role.');
                                $('[name=programmer],[name=designer],[name=concept]').parent().addClass('error').focus();
                                break;
                            case 'error_7' :
                                console.log('You have already applied. Please contact us if you wish to re-submit your application.');
                                alert('You have already applied. Please contact us if you wish to re-submit your application.');
                                break;
                        }
                    }
                }
            });

            return false;
        });
    });
})(jQuery);