package hn.proyecto.tienda.Servicios;

import java.util.List;

import hn.proyecto.tienda.Modelos.Pedidos;

public interface PedidosService {

    public Pedidos crearPedido(Pedidos pedido); 

    public String eliminarPedidoPorId (Integer idPedido) ; 

    public List<Pedidos> obtenerTodos();

    public String actualizarPedido(Integer idpedido ,Pedidos pedido); 
   
    public Pedidos obtenerPedidoPorId(int idpedido, Pedidos pedido);
    
}
