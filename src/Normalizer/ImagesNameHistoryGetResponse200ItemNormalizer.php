<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImagesNameHistoryGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ImagesNameHistoryGetResponse200Item' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ImagesNameHistoryGetResponse200Item' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ImagesNameHistoryGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data) && null !== $data['Id']) {
            $object->setId($data['Id']);
        } elseif (\array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (\array_key_exists('Created', $data) && null !== $data['Created']) {
            $object->setCreated($data['Created']);
        } elseif (\array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('CreatedBy', $data) && null !== $data['CreatedBy']) {
            $object->setCreatedBy($data['CreatedBy']);
        } elseif (\array_key_exists('CreatedBy', $data) && null === $data['CreatedBy']) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('Tags', $data) && null !== $data['Tags']) {
            $values = [];
            foreach ($data['Tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        } elseif (\array_key_exists('Tags', $data) && null === $data['Tags']) {
            $object->setTags(null);
        }
        if (\array_key_exists('Size', $data) && null !== $data['Size']) {
            $object->setSize($data['Size']);
        } elseif (\array_key_exists('Size', $data) && null === $data['Size']) {
            $object->setSize(null);
        }
        if (\array_key_exists('Comment', $data) && null !== $data['Comment']) {
            $object->setComment($data['Comment']);
        } elseif (\array_key_exists('Comment', $data) && null === $data['Comment']) {
            $object->setComment(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Id'] = $object->getId();
        $data['Created'] = $object->getCreated();
        $data['CreatedBy'] = $object->getCreatedBy();
        $values = [];
        foreach ($object->getTags() as $value) {
            $values[] = $value;
        }
        $data['Tags'] = $values;
        $data['Size'] = $object->getSize();
        $data['Comment'] = $object->getComment();

        return $data;
    }
}
