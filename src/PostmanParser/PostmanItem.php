<?php

namespace Potherca\PostmanParser;

interface PostmanItem
{
    const ATTRIBUTE_ID = 'id';
    const ATTRIBUTE_NAME = 'name';
    const ATTRIBUTE_DESCRIPTION = 'description';

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);
}
