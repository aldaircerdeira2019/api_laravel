<script type="text/javascript">
    function deleteDiretor(id)
        {
            $.ajax({
                url: "{{URL('api/diretor')}}" +'/' +id,
                type: 'DELETE',
                dataType: 'JSON',
                success: function (data) 
                {
                    if(data.diretor != null)
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