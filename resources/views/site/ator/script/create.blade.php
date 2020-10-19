<script type="text/javascript">
    function CreateAtor()
        {
            $('#CreateAtorModal').modal('show');
            $('#enviar02').click(function (event) {
                $.ajax({
                    url: "{{URL('api/ator')}}",
                    type: 'POST',
                    data: {
                        'name_ator':  $('#name_ator').val(),
                        'data_nascimento':   $('#data_nascimento').val(),
                        'sexo'     :  $('#sexo').val(),
                        'email'   :    $('#email').val(),
                    },
                    success: function (data) 
                    {
                        if(data.create_ator != null)
                        {
                            alert('Cadastrado com sucesso');
                        }
                        if(data.errors != null)
                        {
                            var response = data.errors;
                            $.each(response, function(index) { 
                                alert(data.errors[index]);
                                n = index;
                            });
                            
                        }
                    }
                });
            }); 
        }
</script>  