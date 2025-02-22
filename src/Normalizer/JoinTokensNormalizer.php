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

class JoinTokensNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\JoinTokens' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\JoinTokens' === $data::class;
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
        $object = new \Docker\API\Model\JoinTokens();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Worker', $data) && null !== $data['Worker']) {
            $object->setWorker($data['Worker']);
        } elseif (\array_key_exists('Worker', $data) && null === $data['Worker']) {
            $object->setWorker(null);
        }
        if (\array_key_exists('Manager', $data) && null !== $data['Manager']) {
            $object->setManager($data['Manager']);
        } elseif (\array_key_exists('Manager', $data) && null === $data['Manager']) {
            $object->setManager(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getWorker()) {
            $data['Worker'] = $object->getWorker();
        }
        if (null !== $object->getManager()) {
            $data['Manager'] = $object->getManager();
        }

        return $data;
    }
}
