package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.Productos;

public interface ProductosRepository extends JpaRepository<Productos, Integer> {
    
}
