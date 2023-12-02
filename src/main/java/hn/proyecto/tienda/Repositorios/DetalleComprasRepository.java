package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.DetalleCompras;

public interface DetalleComprasRepository extends JpaRepository<DetalleCompras, Integer> {
    
}
