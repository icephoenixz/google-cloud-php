<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/tag.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Tags point to a version and represent an alternative name that can be used
 * to access the version.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.Tag</code>
 */
class Tag extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the tag, for example:
     * "projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/tags/tag1".
     * If the package part contains slashes, the slashes are escaped.
     * The tag part can only have characters in [a-zA-Z0-9\-._~:&#64;], anything else
     * must be URL encoded.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The name of the version the tag refers to, for example:
     * `projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/sha256:5243811`
     * If the package or version ID parts contain slashes, the slashes are
     * escaped.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the tag, for example:
     *           "projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/tags/tag1".
     *           If the package part contains slashes, the slashes are escaped.
     *           The tag part can only have characters in [a-zA-Z0-9\-._~:&#64;], anything else
     *           must be URL encoded.
     *     @type string $version
     *           The name of the version the tag refers to, for example:
     *           `projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/sha256:5243811`
     *           If the package or version ID parts contain slashes, the slashes are
     *           escaped.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Tag::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the tag, for example:
     * "projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/tags/tag1".
     * If the package part contains slashes, the slashes are escaped.
     * The tag part can only have characters in [a-zA-Z0-9\-._~:&#64;], anything else
     * must be URL encoded.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the tag, for example:
     * "projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/tags/tag1".
     * If the package part contains slashes, the slashes are escaped.
     * The tag part can only have characters in [a-zA-Z0-9\-._~:&#64;], anything else
     * must be URL encoded.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The name of the version the tag refers to, for example:
     * `projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/sha256:5243811`
     * If the package or version ID parts contain slashes, the slashes are
     * escaped.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The name of the version the tag refers to, for example:
     * `projects/p1/locations/us-central1/repositories/repo1/packages/pkg1/versions/sha256:5243811`
     * If the package or version ID parts contain slashes, the slashes are
     * escaped.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

