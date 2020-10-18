<script type="text/javascript">
    function modalCreate()
        {
            $('#CreateModal').modal('show');
            $('#enviar').click(function (event) {
                
                $.ajax({
                    url: "{{URL('api/filme')}}",
                    type: 'POST',
                    data: {
                        'categoria_id':  $('#categoria_id').val(),
                        'diretor_id':   $('#diretor_id').val(),
                        'name_filme'     :  $('#name_filme').val(),
                        'data_estreia'   :    $('#data_estreia').val(),
                        'descricao'      :    $('#descricao').val(),
                    },
                    success: function (data) 
                    {
                        if(data.create_filme != null)
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