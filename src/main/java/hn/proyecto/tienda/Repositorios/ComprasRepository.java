package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.Compras;

public interface ComprasRepository extends JpaRepository<Compras, Integer> {
    
}
