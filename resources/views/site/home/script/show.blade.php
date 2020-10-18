<script type="text/javascript">
    function modalShow(id)
        {
            
            $('#ShowModal').modal('show');
            $('#retorno_html').remove(); 
            $('#btn_edit').remove(); 
            $('#aguardando').show();
      
            $.ajax({
                url: "{{URL('api/filme')}}" +'/' +id,
                type: 'GET',
                dataType: 'JSON',
                success: function (data) 
                {
                   /*  if(data.html != null)
                    {
                        $('#aguardando').hide();
                        $('#conteudo').html((data.html)); 
                        $('#btn').html((data.btn)); 
                    }
                    if(data.erro != null)
                    {
                        $('#aguardando').hide();
                        $('#conteudo').html((data.erro)); 
                    } */
                }
            });  
        }
</script>  