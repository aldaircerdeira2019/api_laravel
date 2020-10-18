<script type="text/javascript">
    function Delete(id)
        {
            $.ajax({
                url: "{{URL('api/filme')}}" +'/' +id,
                type: 'DELETE',
                dataType: 'JSON',
                success: function (data) 
                {
                    if(data.success != null)
                    {
                        alert(data.success );
                    }
                    if(data.erro != null)
                    {
                        alert(data.erro);
                    }
                }
            });
        }
</script>  
