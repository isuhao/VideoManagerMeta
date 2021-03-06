<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Defines the contract for the implementations of the Channel entity.
 */
interface ChannelInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     *
     * @return ChannelInterface
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     *
     * @return ChannelInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     *
     * @return ChannelInterface
     */
    public function setDescription($description);

    /**
     * @return array
     */
    public function getCustomMetadata();

    /**
     * @param array $customMetadata
     *
     * @return ChannelInterface
     */
    public function setCustomMetadata($customMetadata);

    /**
     * @return ChannelInterface
     */
    public function getParent();

    /**
     * @param ChannelInterface $parent
     *
     * @return ChannelInterface
     */
    public function setParent(self $parent);

    /**
     * @return ChannelInterface[]
     */
    public function getChildren();

    /**
     * @param ChannelInterface $child
     *
     * @return ChannelInterface
     */
    public function addChild(self $child);

    /**
     * @param ChannelInterface $child
     *
     * @return ChannelInterface
     */
    public function removeChild(self $child);
}
