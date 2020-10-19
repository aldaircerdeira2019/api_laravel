<script type="text/javascript">
    function deleteAtor(id)
        {
            $.ajax({
                url: "{{URL('api/ator')}}" +'/' +id,
                type: 'DELETE',
                dataType: 'JSON',
                success: function (data) 
                {
                    if(data.ator != null)
                    {
                        alert('operação concluida com êxito');
                    }
                    if(data.erro != null)
                    {
                        alert(data.erro);
                    }
                }
            });
        }
</script>  