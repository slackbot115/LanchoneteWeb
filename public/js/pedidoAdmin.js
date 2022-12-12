$(document).ready( function() {
    function groupBy(arr, property){
        return arr.reduce( function (anterior, atual){
            if(!anterior[atual[property]]){
                anterior[atual[property]] = [];
            }
            anterior[atual[property]].push(atual);
            return anterior;
        }, [] );
    }

    function showUpdatedPedidos(pedidos_group){
        divListPedidos = $("#list-pedidos");

        divListPedidos.html("");
        pedidos_group.forEach(pedidos_tipo => {
            if(pedidos_tipo[0].status == 'A') {
                divListPedidos.append(`
                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                        Pedido ${pedidos_tipo[0].id}
                    </a>
                `);
            }
            else if(pedidos_tipo[0].status == 'R') {
                divListPedidos.append(`
                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">
                        Pedido ${pedidos_tipo[0].id}
                    </a>
                `);
            }
            else if(pedidos_tipo[0].status == 'C') {
                divListPedidos.append(`
                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">
                        Pedido ${pedidos_tipo[0].id}
                    </a>
                `);
            }
            else if(pedidos_tipo[0].status == 'E') {
                divListPedidos.append(`
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">
                        Pedido ${pedidos_tipo[0].id}
                    </a>
                `);
            }
            else if(pedidos_tipo[0].status == 'F') {
                divListPedidos.append(`
                    <a href="#" class="list-group-item list-group-item-action">
                        Pedido ${pedidos_tipo[0].id}
                    </a>
                `);
            }
        });
    }

    function updatePedidos() {
        $.ajax({
            type: "GET",
            url: `/pedido/admin/getpedidos/`,
            data: null,
            dataType: "json",
            success: function(response){
                console.log(response);
                pedidos_group = groupBy(response.return, "id");
                showUpdatedPedidos(pedidos_group);
            },
            error: function(error){
                console.log("Erro");
                console.log(error);
            }
        });
    }

    updatePedidos();
});
