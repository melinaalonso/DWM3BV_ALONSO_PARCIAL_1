<?php

class Producto
{
    protected $producto_id;
    protected $titulo;
    protected $detalle;
    protected $texto_descripcion;
    protected $imagen;
    protected $imagen_descripcion;
    protected $precio;   

    public function todo(): array
    {
        $filename = __DIR__ . '/../data/productos.json';
        $jsonContent = file_get_contents($filename);
        $data = json_decode($jsonContent, true);
        $productos = [];

        foreach ($data as $registro) {
            $producto = new self();
            $producto->setProductoId($registro['producto_id']);
            $producto->setTitulo($registro['titulo']);
            $producto->setDetalle($registro['detalle']);
            $producto->setTextoDescripcion($registro['texto_descripcion']);
            $producto->setImagen($registro['imagen']);
            $producto->setImagenDescripcion($registro['imagen_descripcion']);
            $producto->setPrecio($registro['precio']);

            $productos[] = $producto;
        }

        return $productos;
    }

    public function traerPorId(int $id): ?self
    {
        $productos = (new self())->todo();

        foreach ($productos as $producto) {
            if ($producto->getProductoId() === $id) {
                return $producto;
            }
        }

        return null;
    }

    /**
     * @return mixed
     */
    public function getProductoId()
    {
        return $this->producto_id;
    }

    /**
     * @param mixed $producto_id
     */
    public function setProductoId($producto_id): void
    {
        $this->producto_id = $producto_id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * @param mixed $detalle
     */
    public function setDetalle($detalle): void
    {
        $this->detalle = $detalle;
    }

    /**
     * @return mixed
     */
    public function getTextoDescripcion()
    {
        return $this->texto_descripcion;
    }

    /**
     * @param mixed $texto_descripcion
     */
    public function setTextoDescripcion($texto_descripcion): void
    {
        $this->texto_descripcion = $texto_descripcion;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getImagenDescripcion()
    {
        return $this->imagen_descripcion;
    }

    /**
     * @param mixed $imagen_descripcion
     */
    public function setImagenDescripcion($imagen_descripcion): void
    {
        $this->imagen_descripcion = $imagen_descripcion;
    }
     /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }
}

