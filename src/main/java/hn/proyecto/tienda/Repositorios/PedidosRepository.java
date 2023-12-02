package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.Pedidos;

public interface PedidosRepository extends JpaRepository<Pedidos, Integer> {
    
}
