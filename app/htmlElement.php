<?php

namespace App;

class HtmlElement
{
    private $name;
    private $content;
    private $attributes;

    public function __construct(string $name, array $attributes = [], $content = null)
    {
        $this->name = $name;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function render()
    {
        //Si el elemento tiene atributos
        if (!empty($this->attributes)) {

            $htmlAttributes = '';
            foreach ($this->attributes as $name => $value) {
                $htmlAttributes .= $name . '="' . $value.'"'; //name="value"
            }
            //Abrir la etiqueta con atributos
            $result = '<' . $this->name .' '. $htmlAttributes . '>';
        } else {

            //Abrir la etiqueta sin atributos
            $result = '<' . $this->name . '>';
        }

        //Imprimir el contenido
        $result .= $this->content;
        //Cerrar la etiqueta 
        $result .= '</' . $this->name . '>';

        return $result;
    }
}