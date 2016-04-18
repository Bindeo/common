<?php

namespace Bindeo\DataModel;

interface SpendingStorageInterface
{
    public function getType();

    public function getStorageLeft();

    public function getStampsLeft();
}