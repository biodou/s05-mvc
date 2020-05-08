<?php

// comment ça, Poem sans e et sans accent grave ? Eh oui, comme l'anglais est la langue officielle de l'informatique, on va l'utiliser partout
// de plus, quand notre application connaîtra un succès mondial et sera disponible dans 57 langues, il semblera bien plus logique (et bien maintenable) que son code soit écrit en anglais
// bon, on va continuer d'écrire des commentaires en français, hein ;-) Faut pas pousser le bouchon dans les orties
class Poem {
    // toujours, tout le temps, qu'il fasse beau ou qu'il neige, chaque modèle aura un id
    private $id;
    private $name;
    private $category;
    private $author;
    private $body;
    private $rate;

    // \o/ Il faut écrire tous les getters et setters à chaque fois ??
    // Oui, mais VSCode dispose d'une extension sobrement nommée PHP Getters and Setters qu'il suffit d'installer
    // Puis en cliquant droit sur chaque propriété, l'option "Insert PHP Getter Setter" se chargera du reste

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }
}