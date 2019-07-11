function Builder(obj){
    if ( typeof obj !== 'object' ) throw new Error('Builder did not find object.');
    if ( obj.infodata === undefined ) throw new Error('Builder did not find object.');

    this.data = obj.infodata;

    this.msg = document.createElement('div');
    this.msg.className = 'row alert';

    this.content =      '<div class="col-12 px-xl-0">';
    this.content +=     '   <label class="response text-center d-block"></label>';
    this.content +=     '</div>';

    this.msg.innerHTML = this.content;

    if ( $('form').find('.alert').length == 0 ) $('form').append(this.msg);

    $('form').find('.alert label').html(this.data);

    this.build = (data) => {
        $('form').find('.alert label').html(this.response);
    }
}

!function(){
    //-- PHPMailer AJAX
    // Send
    $('form').find('input[data-clean]').click(e => {
        e.preventDefault();
        $('form').find('input:not([type="submit"])').val('')
        $('form').find('.error').removeClass('error');
    })

    // Clean
    $('form').find('input[type="submit"]:not([data-clean])').click(e => {
        e.preventDefault();
        $('form').find('.error').removeClass('error');

        let response = {
            name : $('[name="name"]').val(),
            email : $('[name="email"]').val(),
            subject : $('[name="subject"]').val(),
            phone : $('[name="phone"]').val(),
            msg : $('[name="msg"]').val()
        },
        urlData = `&name=${response.name}&email=${response.email}&subject=${response.subject}&phone=${response.phone}&msg=${response.msg}`;

        let catchError = [];
        for( let i = 0; i < Object.keys(response).length; i++){
            if ( Object.values(response)[i].length <= 4 ){
              $('[name=' + Object.keys(response)[i] + ']').addClass('error');
              catchError.push(Object.keys(response)[i]);
            }
        }

        if ( !$('form').find('[name="email"]').val().includes('@') ) {
            catchError.push('email-error');
            $('form').find('[name="email"]').addClass('error');
        }

        if ( $('form').find('[name="phone"]').val().replace(/\D/g, '').length < 5 ){
            catchError.push('phone-error');
            $('form').find('[name="phone"]').addClass('error');
        }

        if ( catchError.length > 0 ) return

        $.ajax({
            type: "POST",
            url: `${sitelink}mail/submit.php`, /* path to submit.php */
            async: true,
            data: urlData, /* link generated */
            success: function(data) { /* success */
                var responseAjax = new Builder({
                    infodata : data
                });

                $('form').find('input:not([type="submit"])').val('');
                $('form').find('textarea').val('');
                $('form').find('error').removeClass('error');
                responseAjax.build(data);
            },
            beforeSend: function() { /* antes de enviar */
               $('#loader').addClass('loading'); /* mostra o loading */
            },
            complete: function(){ /* completo */
               $('#loader').removeClass('loading'); /* esconde o loading */
            }
         });
    })
}()
