package hn.proyecto.tienda.Servicios.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.proyecto.tienda.Modelos.Pedidos;
import hn.proyecto.tienda.Repositorios.PedidosRepository;
import hn.proyecto.tienda.Servicios.PedidosService;

@Service
public class PedidosServiceImpl implements PedidosService {

    @Autowired
    private PedidosRepository PedidosRepository;

    @Override
    public Pedidos crearPedido(Pedidos nvopedido) {
        Pedidos pedidoGuardado = PedidosRepository.save(nvopedido);
        return pedidoGuardado; 
    }

    @Override
    public String eliminarPedidoPorId(Integer idPedido) {
        Pedidos pedidoEliminar = this.PedidosRepository.findById(idPedido).get();

        if(pedidoEliminar != null){
            this.PedidosRepository.delete(pedidoEliminar);
            return "Se ha eliminado el pedido " + pedidoEliminar.getIdPedido();
        }

        return "No existe el pedido con id " + idPedido;
    }

    @Override
    public List<Pedidos> obtenerTodos() {
        return this.PedidosRepository.findAll();
    }

    @Override
    public String actualizarPedido(Integer idpedido, Pedidos pedido) {
        Pedidos PedidoActualizar = this.PedidosRepository.findById(idpedido).get();

        if(PedidoActualizar != null){
            PedidoActualizar.setFechaPedido(pedido.getFechaPedido()); 
            PedidoActualizar.setEstado(pedido.getEstado()); 
            this.PedidosRepository.save(PedidoActualizar); 

            return "se Ha actualizado el pedido: " + idpedido;
        }
        return "No Existe el pedido con id: " + idpedido;
    }

    @Override
    public Pedidos obtenerPedidoPorId(int idpedido, Pedidos pedido) {
        Pedidos pedidoEncontrado = this.PedidosRepository.findById(idpedido).get();
        return pedidoEncontrado;
    }
    
}
