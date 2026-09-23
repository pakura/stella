<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Models\Translation;

class TranslationCollection
{
    /**
     * The Collection instance.
     *
     * @var \Illuminate\Support\Collection|null
     */
    protected $collection;

    /**
     * Create a new TranslationCollection instance.
     *
     * @param  \Illuminate\Support\Collection|null $collection
     * @return void
     */
    public function __construct(?Collection $collection = null)
    {
        $this->collection = $collection;
    }

    /**
     * Get the value from the collection.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (! is_null($this->collection)) {
            return $this->collection->get($key, $default);
        }

        return (new Translation)->byCode($key)->firstAttr('value', null, $default);
    }

    /**
     * Set a new collection instance.
     *
     * @param  \Illuminate\Support\Collection $collection
     * @return $this
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;

        return $this;
    }
}
