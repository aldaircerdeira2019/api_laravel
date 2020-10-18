<script type="text/javascript">
    function modalShow(id)
        {
            
            $('#ShowModal').modal('show');
            $('#retorno_html').remove(); 
            $('#lista').empty();
            $('#btn_edit').remove(); 
            $('#aguardando').show();
      
            $.ajax({
                url: "{{URL('api/filme')}}" +'/' +id,
                type: 'GET',
                dataType: 'JSON',
                success: function (data) 
                {
                    if(data.atores != null){
                       var response = data.atores;
                        $.each(response, function(index) { 
                            $('#lista').prepend("<li>"+response[index].name_ator+"</li>");
                            n = index;
                        });
                    } 
                   if(data.filme != null)
                    {
                        $('#aguardando').hide();
                        $('#conteudo').prepend("<div id='retorno_html'><h5 class='card-title'>"+data.filme.name_filme+"</h5><small class='text-muted mb-0'><b>categoria: </b>"+data.filme.name_categoria+" <b>Lançado em: </b>"+data.filme.data_estreia+" <b>Diretor: </b>"+data.filme.name_diretor+"</small><p class='card-text'>"+data.filme.descricao+"</p></div>"); 
                        $('#btn').prepend("<a class='btn btn-danger btn-sm float-left' id='btn_edit'  href='#' onclick='Delete("+data.filme.id+")' ><i class='fas fa-trash-alt'></i> Deletar</a>");
                    }
                    if(data.erro != null)
                    {
                        $('#aguardando').hide();
                        $('#conteudo').prepend("<div id='retorno_html'><h5>"+data.erro+"</h5></div>"); 
                    } 
                }
            });  
        }
</script>  

