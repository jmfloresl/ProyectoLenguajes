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

import hn.proyecto.tienda.Modelos.Clientes;
import hn.proyecto.tienda.Servicios.Impl.ClientesServiceImpl;

@RestController
@RequestMapping("/api/clientes")
public class ClientesController {
    @Autowired
    private ClientesServiceImpl clienteServiceImpl; 

    @PostMapping("/crear")
    public Clientes crearCliente(@RequestBody Clientes nvocliente){

        return this.clienteServiceImpl.crearCliente(nvocliente);
    }

    @GetMapping("/todos")
    public List<Clientes> obtenerTodos(){
        return this.clienteServiceImpl.obtenerTodos();
    }
    

    @DeleteMapping("/eliminar")
    public String eliminarClientePorId(@RequestParam(name= "Id_Cliente") Integer idcliente){ 
        return this.clienteServiceImpl.eliminarClientePorId(idcliente); 

    }
    
    @PutMapping("/actualizar")
    public String actualizarPorId(@RequestParam(name="Id_Cliente")Integer idcliente,
                                  @RequestBody Clientes cliente){
            return this.clienteServiceImpl.actualizarCliente(idcliente,cliente);


    }
    
}
