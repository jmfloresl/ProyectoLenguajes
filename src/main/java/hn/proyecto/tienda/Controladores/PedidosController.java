package hn.proyecto.tienda.Controladores;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;
import hn.proyecto.tienda.Modelos.Pedidos;
import hn.proyecto.tienda.Servicios.Impl.PedidosServiceImpl;

@RestController
@RequestMapping("/api/pedidos")
public class PedidosController {

    @Autowired
    private PedidosServiceImpl pedidosServiceImpl;

      @PostMapping("/crear")
    public Pedidos crearPedido(@RequestBody Pedidos nvopedido){

        return this.pedidosServiceImpl.crearPedido(nvopedido);
    }

    @GetMapping("/todos")
    public List<Pedidos> obtenerTodos(){
        return this.pedidosServiceImpl.obtenerTodos();
    }
    

    @DeleteMapping("/eliminar")
    public String eliminarPedidoPorId(@RequestParam(name= "Id_Pedido") Integer idpedido){ 
        return this.pedidosServiceImpl.eliminarPedidoPorId(idpedido); 

    }
    
    @PutMapping("/actualizar")
    public String actualizarPorId(@RequestParam(name="Id_Peidido")Integer idpedido,
                                  @RequestBody Pedidos pedido){
            return this.pedidosServiceImpl.actualizarPedido(idpedido, pedido);

    }
    
    
}
