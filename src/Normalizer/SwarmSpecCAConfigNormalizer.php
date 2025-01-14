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

class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\SwarmSpecCAConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\SwarmSpecCAConfig' === $data::class;
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
        $object = new \Docker\API\Model\SwarmSpecCAConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NodeCertExpiry', $data) && null !== $data['NodeCertExpiry']) {
            $object->setNodeCertExpiry($data['NodeCertExpiry']);
        } elseif (\array_key_exists('NodeCertExpiry', $data) && null === $data['NodeCertExpiry']) {
            $object->setNodeCertExpiry(null);
        }
        if (\array_key_exists('ExternalCAs', $data) && null !== $data['ExternalCAs']) {
            $values = [];
            foreach ($data['ExternalCAs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem', 'json', $context);
            }
            $object->setExternalCAs($values);
        } elseif (\array_key_exists('ExternalCAs', $data) && null === $data['ExternalCAs']) {
            $object->setExternalCAs(null);
        }
        if (\array_key_exists('SigningCACert', $data) && null !== $data['SigningCACert']) {
            $object->setSigningCACert($data['SigningCACert']);
        } elseif (\array_key_exists('SigningCACert', $data) && null === $data['SigningCACert']) {
            $object->setSigningCACert(null);
        }
        if (\array_key_exists('SigningCAKey', $data) && null !== $data['SigningCAKey']) {
            $object->setSigningCAKey($data['SigningCAKey']);
        } elseif (\array_key_exists('SigningCAKey', $data) && null === $data['SigningCAKey']) {
            $object->setSigningCAKey(null);
        }
        if (\array_key_exists('ForceRotate', $data) && null !== $data['ForceRotate']) {
            $object->setForceRotate($data['ForceRotate']);
        } elseif (\array_key_exists('ForceRotate', $data) && null === $data['ForceRotate']) {
            $object->setForceRotate(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNodeCertExpiry()) {
            $data['NodeCertExpiry'] = $object->getNodeCertExpiry();
        }
        if (null !== $object->getExternalCAs()) {
            $values = [];
            foreach ($object->getExternalCAs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ExternalCAs'] = $values;
        }
        if (null !== $object->getSigningCACert()) {
            $data['SigningCACert'] = $object->getSigningCACert();
        }
        if (null !== $object->getSigningCAKey()) {
            $data['SigningCAKey'] = $object->getSigningCAKey();
        }
        if (null !== $object->getForceRotate()) {
            $data['ForceRotate'] = $object->getForceRotate();
        }

        return $data;
    }
}
