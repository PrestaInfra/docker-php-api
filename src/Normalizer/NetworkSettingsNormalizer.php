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

class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\NetworkSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\NetworkSettings' === $data::class;
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
        $object = new \Docker\API\Model\NetworkSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Bridge', $data) && null !== $data['Bridge']) {
            $object->setBridge($data['Bridge']);
        } elseif (\array_key_exists('Bridge', $data) && null === $data['Bridge']) {
            $object->setBridge(null);
        }
        if (\array_key_exists('SandboxID', $data) && null !== $data['SandboxID']) {
            $object->setSandboxID($data['SandboxID']);
        } elseif (\array_key_exists('SandboxID', $data) && null === $data['SandboxID']) {
            $object->setSandboxID(null);
        }
        if (\array_key_exists('HairpinMode', $data) && null !== $data['HairpinMode']) {
            $object->setHairpinMode($data['HairpinMode']);
        } elseif (\array_key_exists('HairpinMode', $data) && null === $data['HairpinMode']) {
            $object->setHairpinMode(null);
        }
        if (\array_key_exists('LinkLocalIPv6Address', $data) && null !== $data['LinkLocalIPv6Address']) {
            $object->setLinkLocalIPv6Address($data['LinkLocalIPv6Address']);
        } elseif (\array_key_exists('LinkLocalIPv6Address', $data) && null === $data['LinkLocalIPv6Address']) {
            $object->setLinkLocalIPv6Address(null);
        }
        if (\array_key_exists('LinkLocalIPv6PrefixLen', $data) && null !== $data['LinkLocalIPv6PrefixLen']) {
            $object->setLinkLocalIPv6PrefixLen($data['LinkLocalIPv6PrefixLen']);
        } elseif (\array_key_exists('LinkLocalIPv6PrefixLen', $data) && null === $data['LinkLocalIPv6PrefixLen']) {
            $object->setLinkLocalIPv6PrefixLen(null);
        }
        if (\array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Ports'] as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\PortBinding', 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $object->setPorts($values);
        } elseif (\array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (\array_key_exists('SandboxKey', $data) && null !== $data['SandboxKey']) {
            $object->setSandboxKey($data['SandboxKey']);
        } elseif (\array_key_exists('SandboxKey', $data) && null === $data['SandboxKey']) {
            $object->setSandboxKey(null);
        }
        if (\array_key_exists('SecondaryIPAddresses', $data) && null !== $data['SecondaryIPAddresses']) {
            $values_2 = [];
            foreach ($data['SecondaryIPAddresses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\Address', 'json', $context);
            }
            $object->setSecondaryIPAddresses($values_2);
        } elseif (\array_key_exists('SecondaryIPAddresses', $data) && null === $data['SecondaryIPAddresses']) {
            $object->setSecondaryIPAddresses(null);
        }
        if (\array_key_exists('SecondaryIPv6Addresses', $data) && null !== $data['SecondaryIPv6Addresses']) {
            $values_3 = [];
            foreach ($data['SecondaryIPv6Addresses'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\Address', 'json', $context);
            }
            $object->setSecondaryIPv6Addresses($values_3);
        } elseif (\array_key_exists('SecondaryIPv6Addresses', $data) && null === $data['SecondaryIPv6Addresses']) {
            $object->setSecondaryIPv6Addresses(null);
        }
        if (\array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $object->setEndpointID($data['EndpointID']);
        } elseif (\array_key_exists('EndpointID', $data) && null === $data['EndpointID']) {
            $object->setEndpointID(null);
        }
        if (\array_key_exists('Gateway', $data) && null !== $data['Gateway']) {
            $object->setGateway($data['Gateway']);
        } elseif (\array_key_exists('Gateway', $data) && null === $data['Gateway']) {
            $object->setGateway(null);
        }
        if (\array_key_exists('GlobalIPv6Address', $data) && null !== $data['GlobalIPv6Address']) {
            $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
        } elseif (\array_key_exists('GlobalIPv6Address', $data) && null === $data['GlobalIPv6Address']) {
            $object->setGlobalIPv6Address(null);
        }
        if (\array_key_exists('GlobalIPv6PrefixLen', $data) && null !== $data['GlobalIPv6PrefixLen']) {
            $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
        } elseif (\array_key_exists('GlobalIPv6PrefixLen', $data) && null === $data['GlobalIPv6PrefixLen']) {
            $object->setGlobalIPv6PrefixLen(null);
        }
        if (\array_key_exists('IPAddress', $data) && null !== $data['IPAddress']) {
            $object->setIPAddress($data['IPAddress']);
        } elseif (\array_key_exists('IPAddress', $data) && null === $data['IPAddress']) {
            $object->setIPAddress(null);
        }
        if (\array_key_exists('IPPrefixLen', $data) && null !== $data['IPPrefixLen']) {
            $object->setIPPrefixLen($data['IPPrefixLen']);
        } elseif (\array_key_exists('IPPrefixLen', $data) && null === $data['IPPrefixLen']) {
            $object->setIPPrefixLen(null);
        }
        if (\array_key_exists('IPv6Gateway', $data) && null !== $data['IPv6Gateway']) {
            $object->setIPv6Gateway($data['IPv6Gateway']);
        } elseif (\array_key_exists('IPv6Gateway', $data) && null === $data['IPv6Gateway']) {
            $object->setIPv6Gateway(null);
        }
        if (\array_key_exists('MacAddress', $data) && null !== $data['MacAddress']) {
            $object->setMacAddress($data['MacAddress']);
        } elseif (\array_key_exists('MacAddress', $data) && null === $data['MacAddress']) {
            $object->setMacAddress(null);
        }
        if (\array_key_exists('Networks', $data) && null !== $data['Networks']) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Networks'] as $key_1 => $value_4) {
                $values_4[$key_1] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\EndpointSettings', 'json', $context);
            }
            $object->setNetworks($values_4);
        } elseif (\array_key_exists('Networks', $data) && null === $data['Networks']) {
            $object->setNetworks(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBridge()) {
            $data['Bridge'] = $object->getBridge();
        }
        if (null !== $object->getSandboxID()) {
            $data['SandboxID'] = $object->getSandboxID();
        }
        if (null !== $object->getHairpinMode()) {
            $data['HairpinMode'] = $object->getHairpinMode();
        }
        if (null !== $object->getLinkLocalIPv6Address()) {
            $data['LinkLocalIPv6Address'] = $object->getLinkLocalIPv6Address();
        }
        if (null !== $object->getLinkLocalIPv6PrefixLen()) {
            $data['LinkLocalIPv6PrefixLen'] = $object->getLinkLocalIPv6PrefixLen();
        }
        if (null !== $object->getPorts()) {
            $values = [];
            foreach ($object->getPorts() as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $data['Ports'] = $values;
        }
        if (null !== $object->getSandboxKey()) {
            $data['SandboxKey'] = $object->getSandboxKey();
        }
        if (null !== $object->getSecondaryIPAddresses()) {
            $values_2 = [];
            foreach ($object->getSecondaryIPAddresses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['SecondaryIPAddresses'] = $values_2;
        }
        if (null !== $object->getSecondaryIPv6Addresses()) {
            $values_3 = [];
            foreach ($object->getSecondaryIPv6Addresses() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['SecondaryIPv6Addresses'] = $values_3;
        }
        if (null !== $object->getEndpointID()) {
            $data['EndpointID'] = $object->getEndpointID();
        }
        if (null !== $object->getGateway()) {
            $data['Gateway'] = $object->getGateway();
        }
        if (null !== $object->getGlobalIPv6Address()) {
            $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
        }
        if (null !== $object->getGlobalIPv6PrefixLen()) {
            $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
        }
        if (null !== $object->getIPAddress()) {
            $data['IPAddress'] = $object->getIPAddress();
        }
        if (null !== $object->getIPPrefixLen()) {
            $data['IPPrefixLen'] = $object->getIPPrefixLen();
        }
        if (null !== $object->getIPv6Gateway()) {
            $data['IPv6Gateway'] = $object->getIPv6Gateway();
        }
        if (null !== $object->getMacAddress()) {
            $data['MacAddress'] = $object->getMacAddress();
        }
        if (null !== $object->getNetworks()) {
            $values_4 = [];
            foreach ($object->getNetworks() as $key_1 => $value_4) {
                $values_4[$key_1] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['Networks'] = $values_4;
        }

        return $data;
    }
}
