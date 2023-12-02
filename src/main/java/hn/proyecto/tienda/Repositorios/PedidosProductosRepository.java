package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.PedidosProductos;


public interface PedidosProductosRepository extends JpaRepository<PedidosProductos, Integer> {
    
}
