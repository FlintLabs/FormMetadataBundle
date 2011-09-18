<?php
/*
 * This file is part of the Forms Annotation library
 *
 * (c) Cameron Manderson <camm@flintinteractive.com.au>
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FlintLabs\Component\FormAnnotations;

/**
 *
 * @author camm (camm@flintinteractive.com.au)
 */
interface EntityMetadataReader
{
    public function getMetadata($entity);
}
