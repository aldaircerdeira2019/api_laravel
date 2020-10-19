<script type="text/javascript">
    function CreateDiretor()
        {
            $('#CreateDiretorModal').modal('show');
            $('#enviar03').click(function (event) {
                $.ajax({
                    url: "{{URL('api/diretor')}}",
                    type: 'POST',
                    data: {
                        'name_diretor':  $('#name_diretor').val(),
                        'data_nascimento':   $('#data_nascimento').val(),
                        'sexo'     :  $('#sexo').val(),
                        'email'   :    $('#email').val(),
                    },
                    success: function (data) 
                    {
                        if(data.create_diretor != null)
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