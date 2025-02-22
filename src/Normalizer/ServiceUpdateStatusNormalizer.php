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

class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ServiceUpdateStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ServiceUpdateStatus' === $data::class;
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
        $object = new \Docker\API\Model\ServiceUpdateStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('State', $data) && null !== $data['State']) {
            $object->setState($data['State']);
        } elseif (\array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (\array_key_exists('StartedAt', $data) && null !== $data['StartedAt']) {
            $object->setStartedAt($data['StartedAt']);
        } elseif (\array_key_exists('StartedAt', $data) && null === $data['StartedAt']) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('CompletedAt', $data) && null !== $data['CompletedAt']) {
            $object->setCompletedAt($data['CompletedAt']);
        } elseif (\array_key_exists('CompletedAt', $data) && null === $data['CompletedAt']) {
            $object->setCompletedAt(null);
        }
        if (\array_key_exists('Message', $data) && null !== $data['Message']) {
            $object->setMessage($data['Message']);
        } elseif (\array_key_exists('Message', $data) && null === $data['Message']) {
            $object->setMessage(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getStartedAt()) {
            $data['StartedAt'] = $object->getStartedAt();
        }
        if (null !== $object->getCompletedAt()) {
            $data['CompletedAt'] = $object->getCompletedAt();
        }
        if (null !== $object->getMessage()) {
            $data['Message'] = $object->getMessage();
        }

        return $data;
    }
}
