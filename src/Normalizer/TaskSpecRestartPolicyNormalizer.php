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

class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\TaskSpecRestartPolicy' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\TaskSpecRestartPolicy' === $data::class;
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
        $object = new \Docker\API\Model\TaskSpecRestartPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Condition', $data) && null !== $data['Condition']) {
            $object->setCondition($data['Condition']);
        } elseif (\array_key_exists('Condition', $data) && null === $data['Condition']) {
            $object->setCondition(null);
        }
        if (\array_key_exists('Delay', $data) && null !== $data['Delay']) {
            $object->setDelay($data['Delay']);
        } elseif (\array_key_exists('Delay', $data) && null === $data['Delay']) {
            $object->setDelay(null);
        }
        if (\array_key_exists('MaxAttempts', $data) && null !== $data['MaxAttempts']) {
            $object->setMaxAttempts($data['MaxAttempts']);
        } elseif (\array_key_exists('MaxAttempts', $data) && null === $data['MaxAttempts']) {
            $object->setMaxAttempts(null);
        }
        if (\array_key_exists('Window', $data) && null !== $data['Window']) {
            $object->setWindow($data['Window']);
        } elseif (\array_key_exists('Window', $data) && null === $data['Window']) {
            $object->setWindow(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCondition()) {
            $data['Condition'] = $object->getCondition();
        }
        if (null !== $object->getDelay()) {
            $data['Delay'] = $object->getDelay();
        }
        if (null !== $object->getMaxAttempts()) {
            $data['MaxAttempts'] = $object->getMaxAttempts();
        }
        if (null !== $object->getWindow()) {
            $data['Window'] = $object->getWindow();
        }

        return $data;
    }
}
