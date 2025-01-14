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

class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\HostConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\HostConfig' === $data::class;
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
        $object = new \Docker\API\Model\HostConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CpuShares', $data) && null !== $data['CpuShares']) {
            $object->setCpuShares($data['CpuShares']);
        } elseif (\array_key_exists('CpuShares', $data) && null === $data['CpuShares']) {
            $object->setCpuShares(null);
        }
        if (\array_key_exists('Memory', $data) && null !== $data['Memory']) {
            $object->setMemory($data['Memory']);
        } elseif (\array_key_exists('Memory', $data) && null === $data['Memory']) {
            $object->setMemory(null);
        }
        if (\array_key_exists('CgroupParent', $data) && null !== $data['CgroupParent']) {
            $object->setCgroupParent($data['CgroupParent']);
        } elseif (\array_key_exists('CgroupParent', $data) && null === $data['CgroupParent']) {
            $object->setCgroupParent(null);
        }
        if (\array_key_exists('BlkioWeight', $data) && null !== $data['BlkioWeight']) {
            $object->setBlkioWeight($data['BlkioWeight']);
        } elseif (\array_key_exists('BlkioWeight', $data) && null === $data['BlkioWeight']) {
            $object->setBlkioWeight(null);
        }
        if (\array_key_exists('BlkioWeightDevice', $data) && null !== $data['BlkioWeightDevice']) {
            $values = [];
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        } elseif (\array_key_exists('BlkioWeightDevice', $data) && null === $data['BlkioWeightDevice']) {
            $object->setBlkioWeightDevice(null);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data) && null !== $data['BlkioDeviceReadBps']) {
            $values_1 = [];
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        } elseif (\array_key_exists('BlkioDeviceReadBps', $data) && null === $data['BlkioDeviceReadBps']) {
            $object->setBlkioDeviceReadBps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data) && null !== $data['BlkioDeviceWriteBps']) {
            $values_2 = [];
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        } elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && null === $data['BlkioDeviceWriteBps']) {
            $object->setBlkioDeviceWriteBps(null);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data) && null !== $data['BlkioDeviceReadIOps']) {
            $values_3 = [];
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        } elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && null === $data['BlkioDeviceReadIOps']) {
            $object->setBlkioDeviceReadIOps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data) && null !== $data['BlkioDeviceWriteIOps']) {
            $values_4 = [];
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        } elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && null === $data['BlkioDeviceWriteIOps']) {
            $object->setBlkioDeviceWriteIOps(null);
        }
        if (\array_key_exists('CpuPeriod', $data) && null !== $data['CpuPeriod']) {
            $object->setCpuPeriod($data['CpuPeriod']);
        } elseif (\array_key_exists('CpuPeriod', $data) && null === $data['CpuPeriod']) {
            $object->setCpuPeriod(null);
        }
        if (\array_key_exists('CpuQuota', $data) && null !== $data['CpuQuota']) {
            $object->setCpuQuota($data['CpuQuota']);
        } elseif (\array_key_exists('CpuQuota', $data) && null === $data['CpuQuota']) {
            $object->setCpuQuota(null);
        }
        if (\array_key_exists('CpuRealtimePeriod', $data) && null !== $data['CpuRealtimePeriod']) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
        } elseif (\array_key_exists('CpuRealtimePeriod', $data) && null === $data['CpuRealtimePeriod']) {
            $object->setCpuRealtimePeriod(null);
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data) && null !== $data['CpuRealtimeRuntime']) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
        } elseif (\array_key_exists('CpuRealtimeRuntime', $data) && null === $data['CpuRealtimeRuntime']) {
            $object->setCpuRealtimeRuntime(null);
        }
        if (\array_key_exists('CpusetCpus', $data) && null !== $data['CpusetCpus']) {
            $object->setCpusetCpus($data['CpusetCpus']);
        } elseif (\array_key_exists('CpusetCpus', $data) && null === $data['CpusetCpus']) {
            $object->setCpusetCpus(null);
        }
        if (\array_key_exists('CpusetMems', $data) && null !== $data['CpusetMems']) {
            $object->setCpusetMems($data['CpusetMems']);
        } elseif (\array_key_exists('CpusetMems', $data) && null === $data['CpusetMems']) {
            $object->setCpusetMems(null);
        }
        if (\array_key_exists('Devices', $data) && null !== $data['Devices']) {
            $values_5 = [];
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        } elseif (\array_key_exists('Devices', $data) && null === $data['Devices']) {
            $object->setDevices(null);
        }
        if (\array_key_exists('DeviceCgroupRules', $data) && null !== $data['DeviceCgroupRules']) {
            $values_6 = [];
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        } elseif (\array_key_exists('DeviceCgroupRules', $data) && null === $data['DeviceCgroupRules']) {
            $object->setDeviceCgroupRules(null);
        }
        if (\array_key_exists('DeviceRequests', $data) && null !== $data['DeviceRequests']) {
            $values_7 = [];
            foreach ($data['DeviceRequests'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\DeviceRequest', 'json', $context);
            }
            $object->setDeviceRequests($values_7);
        } elseif (\array_key_exists('DeviceRequests', $data) && null === $data['DeviceRequests']) {
            $object->setDeviceRequests(null);
        }
        if (\array_key_exists('KernelMemory', $data) && null !== $data['KernelMemory']) {
            $object->setKernelMemory($data['KernelMemory']);
        } elseif (\array_key_exists('KernelMemory', $data) && null === $data['KernelMemory']) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('KernelMemoryTCP', $data) && null !== $data['KernelMemoryTCP']) {
            $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
        } elseif (\array_key_exists('KernelMemoryTCP', $data) && null === $data['KernelMemoryTCP']) {
            $object->setKernelMemoryTCP(null);
        }
        if (\array_key_exists('MemoryReservation', $data) && null !== $data['MemoryReservation']) {
            $object->setMemoryReservation($data['MemoryReservation']);
        } elseif (\array_key_exists('MemoryReservation', $data) && null === $data['MemoryReservation']) {
            $object->setMemoryReservation(null);
        }
        if (\array_key_exists('MemorySwap', $data) && null !== $data['MemorySwap']) {
            $object->setMemorySwap($data['MemorySwap']);
        } elseif (\array_key_exists('MemorySwap', $data) && null === $data['MemorySwap']) {
            $object->setMemorySwap(null);
        }
        if (\array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
            $object->setMemorySwappiness($data['MemorySwappiness']);
        } elseif (\array_key_exists('MemorySwappiness', $data) && null === $data['MemorySwappiness']) {
            $object->setMemorySwappiness(null);
        }
        if (\array_key_exists('NanoCPUs', $data) && null !== $data['NanoCPUs']) {
            $object->setNanoCPUs($data['NanoCPUs']);
        } elseif (\array_key_exists('NanoCPUs', $data) && null === $data['NanoCPUs']) {
            $object->setNanoCPUs(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $object->setOomKillDisable($data['OomKillDisable']);
        } elseif (\array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('Init', $data) && null !== $data['Init']) {
            $object->setInit($data['Init']);
        } elseif (\array_key_exists('Init', $data) && null === $data['Init']) {
            $object->setInit(null);
        }
        if (\array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $object->setPidsLimit($data['PidsLimit']);
        } elseif (\array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $values_8 = [];
            foreach ($data['Ulimits'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_8);
        } elseif (\array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
            $object->setUlimits(null);
        }
        if (\array_key_exists('CpuCount', $data) && null !== $data['CpuCount']) {
            $object->setCpuCount($data['CpuCount']);
        } elseif (\array_key_exists('CpuCount', $data) && null === $data['CpuCount']) {
            $object->setCpuCount(null);
        }
        if (\array_key_exists('CpuPercent', $data) && null !== $data['CpuPercent']) {
            $object->setCpuPercent($data['CpuPercent']);
        } elseif (\array_key_exists('CpuPercent', $data) && null === $data['CpuPercent']) {
            $object->setCpuPercent(null);
        }
        if (\array_key_exists('IOMaximumIOps', $data) && null !== $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
        } elseif (\array_key_exists('IOMaximumIOps', $data) && null === $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps(null);
        }
        if (\array_key_exists('IOMaximumBandwidth', $data) && null !== $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
        } elseif (\array_key_exists('IOMaximumBandwidth', $data) && null === $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth(null);
        }
        if (\array_key_exists('Binds', $data) && null !== $data['Binds']) {
            $values_9 = [];
            foreach ($data['Binds'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setBinds($values_9);
        } elseif (\array_key_exists('Binds', $data) && null === $data['Binds']) {
            $object->setBinds(null);
        }
        if (\array_key_exists('ContainerIDFile', $data) && null !== $data['ContainerIDFile']) {
            $object->setContainerIDFile($data['ContainerIDFile']);
        } elseif (\array_key_exists('ContainerIDFile', $data) && null === $data['ContainerIDFile']) {
            $object->setContainerIDFile(null);
        }
        if (\array_key_exists('LogConfig', $data) && null !== $data['LogConfig']) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], 'Docker\\API\\Model\\HostConfigLogConfig', 'json', $context));
        } elseif (\array_key_exists('LogConfig', $data) && null === $data['LogConfig']) {
            $object->setLogConfig(null);
        }
        if (\array_key_exists('NetworkMode', $data) && null !== $data['NetworkMode']) {
            $object->setNetworkMode($data['NetworkMode']);
        } elseif (\array_key_exists('NetworkMode', $data) && null === $data['NetworkMode']) {
            $object->setNetworkMode(null);
        }
        if (\array_key_exists('PortBindings', $data) && null !== $data['PortBindings']) {
            $values_10 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['PortBindings'] as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, 'Docker\\API\\Model\\PortBinding', 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $object->setPortBindings($values_10);
        } elseif (\array_key_exists('PortBindings', $data) && null === $data['PortBindings']) {
            $object->setPortBindings(null);
        }
        if (\array_key_exists('RestartPolicy', $data) && null !== $data['RestartPolicy']) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\API\\Model\\RestartPolicy', 'json', $context));
        } elseif (\array_key_exists('RestartPolicy', $data) && null === $data['RestartPolicy']) {
            $object->setRestartPolicy(null);
        }
        if (\array_key_exists('AutoRemove', $data) && null !== $data['AutoRemove']) {
            $object->setAutoRemove($data['AutoRemove']);
        } elseif (\array_key_exists('AutoRemove', $data) && null === $data['AutoRemove']) {
            $object->setAutoRemove(null);
        }
        if (\array_key_exists('VolumeDriver', $data) && null !== $data['VolumeDriver']) {
            $object->setVolumeDriver($data['VolumeDriver']);
        } elseif (\array_key_exists('VolumeDriver', $data) && null === $data['VolumeDriver']) {
            $object->setVolumeDriver(null);
        }
        if (\array_key_exists('VolumesFrom', $data) && null !== $data['VolumesFrom']) {
            $values_12 = [];
            foreach ($data['VolumesFrom'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setVolumesFrom($values_12);
        } elseif (\array_key_exists('VolumesFrom', $data) && null === $data['VolumesFrom']) {
            $object->setVolumesFrom(null);
        }
        if (\array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_13 = [];
            foreach ($data['Mounts'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_13);
        } elseif (\array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (\array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
            $values_14 = [];
            foreach ($data['CapAdd'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapAdd($values_14);
        } elseif (\array_key_exists('CapAdd', $data) && null === $data['CapAdd']) {
            $object->setCapAdd(null);
        }
        if (\array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
            $values_15 = [];
            foreach ($data['CapDrop'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setCapDrop($values_15);
        } elseif (\array_key_exists('CapDrop', $data) && null === $data['CapDrop']) {
            $object->setCapDrop(null);
        }
        if (\array_key_exists('CgroupnsMode', $data) && null !== $data['CgroupnsMode']) {
            $object->setCgroupnsMode($data['CgroupnsMode']);
        } elseif (\array_key_exists('CgroupnsMode', $data) && null === $data['CgroupnsMode']) {
            $object->setCgroupnsMode(null);
        }
        if (\array_key_exists('Dns', $data) && null !== $data['Dns']) {
            $values_16 = [];
            foreach ($data['Dns'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setDns($values_16);
        } elseif (\array_key_exists('Dns', $data) && null === $data['Dns']) {
            $object->setDns(null);
        }
        if (\array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
            $values_17 = [];
            foreach ($data['DnsOptions'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDnsOptions($values_17);
        } elseif (\array_key_exists('DnsOptions', $data) && null === $data['DnsOptions']) {
            $object->setDnsOptions(null);
        }
        if (\array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
            $values_18 = [];
            foreach ($data['DnsSearch'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setDnsSearch($values_18);
        } elseif (\array_key_exists('DnsSearch', $data) && null === $data['DnsSearch']) {
            $object->setDnsSearch(null);
        }
        if (\array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
            $values_19 = [];
            foreach ($data['ExtraHosts'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setExtraHosts($values_19);
        } elseif (\array_key_exists('ExtraHosts', $data) && null === $data['ExtraHosts']) {
            $object->setExtraHosts(null);
        }
        if (\array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
            $values_20 = [];
            foreach ($data['GroupAdd'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setGroupAdd($values_20);
        } elseif (\array_key_exists('GroupAdd', $data) && null === $data['GroupAdd']) {
            $object->setGroupAdd(null);
        }
        if (\array_key_exists('IpcMode', $data) && null !== $data['IpcMode']) {
            $object->setIpcMode($data['IpcMode']);
        } elseif (\array_key_exists('IpcMode', $data) && null === $data['IpcMode']) {
            $object->setIpcMode(null);
        }
        if (\array_key_exists('Cgroup', $data) && null !== $data['Cgroup']) {
            $object->setCgroup($data['Cgroup']);
        } elseif (\array_key_exists('Cgroup', $data) && null === $data['Cgroup']) {
            $object->setCgroup(null);
        }
        if (\array_key_exists('Links', $data) && null !== $data['Links']) {
            $values_21 = [];
            foreach ($data['Links'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setLinks($values_21);
        } elseif (\array_key_exists('Links', $data) && null === $data['Links']) {
            $object->setLinks(null);
        }
        if (\array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $object->setOomScoreAdj($data['OomScoreAdj']);
        } elseif (\array_key_exists('OomScoreAdj', $data) && null === $data['OomScoreAdj']) {
            $object->setOomScoreAdj(null);
        }
        if (\array_key_exists('PidMode', $data) && null !== $data['PidMode']) {
            $object->setPidMode($data['PidMode']);
        } elseif (\array_key_exists('PidMode', $data) && null === $data['PidMode']) {
            $object->setPidMode(null);
        }
        if (\array_key_exists('Privileged', $data) && null !== $data['Privileged']) {
            $object->setPrivileged($data['Privileged']);
        } elseif (\array_key_exists('Privileged', $data) && null === $data['Privileged']) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('PublishAllPorts', $data) && null !== $data['PublishAllPorts']) {
            $object->setPublishAllPorts($data['PublishAllPorts']);
        } elseif (\array_key_exists('PublishAllPorts', $data) && null === $data['PublishAllPorts']) {
            $object->setPublishAllPorts(null);
        }
        if (\array_key_exists('ReadonlyRootfs', $data) && null !== $data['ReadonlyRootfs']) {
            $object->setReadonlyRootfs($data['ReadonlyRootfs']);
        } elseif (\array_key_exists('ReadonlyRootfs', $data) && null === $data['ReadonlyRootfs']) {
            $object->setReadonlyRootfs(null);
        }
        if (\array_key_exists('SecurityOpt', $data) && null !== $data['SecurityOpt']) {
            $values_22 = [];
            foreach ($data['SecurityOpt'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setSecurityOpt($values_22);
        } elseif (\array_key_exists('SecurityOpt', $data) && null === $data['SecurityOpt']) {
            $object->setSecurityOpt(null);
        }
        if (\array_key_exists('StorageOpt', $data) && null !== $data['StorageOpt']) {
            $values_23 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $object->setStorageOpt($values_23);
        } elseif (\array_key_exists('StorageOpt', $data) && null === $data['StorageOpt']) {
            $object->setStorageOpt(null);
        }
        if (\array_key_exists('Tmpfs', $data) && null !== $data['Tmpfs']) {
            $values_24 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Tmpfs'] as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $object->setTmpfs($values_24);
        } elseif (\array_key_exists('Tmpfs', $data) && null === $data['Tmpfs']) {
            $object->setTmpfs(null);
        }
        if (\array_key_exists('UTSMode', $data) && null !== $data['UTSMode']) {
            $object->setUTSMode($data['UTSMode']);
        } elseif (\array_key_exists('UTSMode', $data) && null === $data['UTSMode']) {
            $object->setUTSMode(null);
        }
        if (\array_key_exists('UsernsMode', $data) && null !== $data['UsernsMode']) {
            $object->setUsernsMode($data['UsernsMode']);
        } elseif (\array_key_exists('UsernsMode', $data) && null === $data['UsernsMode']) {
            $object->setUsernsMode(null);
        }
        if (\array_key_exists('ShmSize', $data) && null !== $data['ShmSize']) {
            $object->setShmSize($data['ShmSize']);
        } elseif (\array_key_exists('ShmSize', $data) && null === $data['ShmSize']) {
            $object->setShmSize(null);
        }
        if (\array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $values_25 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $object->setSysctls($values_25);
        } elseif (\array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
            $object->setSysctls(null);
        }
        if (\array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $object->setRuntime($data['Runtime']);
        } elseif (\array_key_exists('Runtime', $data) && null === $data['Runtime']) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
            $values_26 = [];
            foreach ($data['ConsoleSize'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->setConsoleSize($values_26);
        } elseif (\array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
            $object->setConsoleSize(null);
        }
        if (\array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $object->setIsolation($data['Isolation']);
        } elseif (\array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('MaskedPaths', $data) && null !== $data['MaskedPaths']) {
            $values_27 = [];
            foreach ($data['MaskedPaths'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setMaskedPaths($values_27);
        } elseif (\array_key_exists('MaskedPaths', $data) && null === $data['MaskedPaths']) {
            $object->setMaskedPaths(null);
        }
        if (\array_key_exists('ReadonlyPaths', $data) && null !== $data['ReadonlyPaths']) {
            $values_28 = [];
            foreach ($data['ReadonlyPaths'] as $value_28) {
                $values_28[] = $value_28;
            }
            $object->setReadonlyPaths($values_28);
        } elseif (\array_key_exists('ReadonlyPaths', $data) && null === $data['ReadonlyPaths']) {
            $object->setReadonlyPaths(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCpuShares()) {
            $data['CpuShares'] = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data['Memory'] = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data['CgroupParent'] = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data['BlkioWeight'] = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = [];
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BlkioWeightDevice'] = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BlkioDeviceReadBps'] = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['BlkioDeviceWriteBps'] = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['BlkioDeviceReadIOps'] = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BlkioDeviceWriteIOps'] = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data['CpuPeriod'] = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data['CpuQuota'] = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data['CpusetCpus'] = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data['CpusetMems'] = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = [];
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Devices'] = $values_5;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = [];
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['DeviceCgroupRules'] = $values_6;
        }
        if (null !== $object->getDeviceRequests()) {
            $values_7 = [];
            foreach ($object->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['DeviceRequests'] = $values_7;
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if (null !== $object->getKernelMemoryTCP()) {
            $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
        }
        if (null !== $object->getMemoryReservation()) {
            $data['MemoryReservation'] = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data['MemorySwap'] = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data['MemorySwappiness'] = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCPUs()) {
            $data['NanoCPUs'] = $object->getNanoCPUs();
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if (null !== $object->getInit()) {
            $data['Init'] = $object->getInit();
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_8 = [];
            foreach ($object->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['Ulimits'] = $values_8;
        }
        if (null !== $object->getCpuCount()) {
            $data['CpuCount'] = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data['CpuPercent'] = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
        }
        if (null !== $object->getBinds()) {
            $values_9 = [];
            foreach ($object->getBinds() as $value_9) {
                $values_9[] = $value_9;
            }
            $data['Binds'] = $values_9;
        }
        if (null !== $object->getContainerIDFile()) {
            $data['ContainerIDFile'] = $object->getContainerIDFile();
        }
        if (null !== $object->getLogConfig()) {
            $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data['NetworkMode'] = $object->getNetworkMode();
        }
        if (null !== $object->getPortBindings()) {
            $values_10 = [];
            foreach ($object->getPortBindings() as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $data['PortBindings'] = $values_10;
        }
        if (null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getAutoRemove()) {
            $data['AutoRemove'] = $object->getAutoRemove();
        }
        if (null !== $object->getVolumeDriver()) {
            $data['VolumeDriver'] = $object->getVolumeDriver();
        }
        if (null !== $object->getVolumesFrom()) {
            $values_12 = [];
            foreach ($object->getVolumesFrom() as $value_12) {
                $values_12[] = $value_12;
            }
            $data['VolumesFrom'] = $values_12;
        }
        if (null !== $object->getMounts()) {
            $values_13 = [];
            foreach ($object->getMounts() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data['Mounts'] = $values_13;
        }
        if (null !== $object->getCapAdd()) {
            $values_14 = [];
            foreach ($object->getCapAdd() as $value_14) {
                $values_14[] = $value_14;
            }
            $data['CapAdd'] = $values_14;
        }
        if (null !== $object->getCapDrop()) {
            $values_15 = [];
            foreach ($object->getCapDrop() as $value_15) {
                $values_15[] = $value_15;
            }
            $data['CapDrop'] = $values_15;
        }
        if (null !== $object->getCgroupnsMode()) {
            $data['CgroupnsMode'] = $object->getCgroupnsMode();
        }
        if (null !== $object->getDns()) {
            $values_16 = [];
            foreach ($object->getDns() as $value_16) {
                $values_16[] = $value_16;
            }
            $data['Dns'] = $values_16;
        }
        if (null !== $object->getDnsOptions()) {
            $values_17 = [];
            foreach ($object->getDnsOptions() as $value_17) {
                $values_17[] = $value_17;
            }
            $data['DnsOptions'] = $values_17;
        }
        if (null !== $object->getDnsSearch()) {
            $values_18 = [];
            foreach ($object->getDnsSearch() as $value_18) {
                $values_18[] = $value_18;
            }
            $data['DnsSearch'] = $values_18;
        }
        if (null !== $object->getExtraHosts()) {
            $values_19 = [];
            foreach ($object->getExtraHosts() as $value_19) {
                $values_19[] = $value_19;
            }
            $data['ExtraHosts'] = $values_19;
        }
        if (null !== $object->getGroupAdd()) {
            $values_20 = [];
            foreach ($object->getGroupAdd() as $value_20) {
                $values_20[] = $value_20;
            }
            $data['GroupAdd'] = $values_20;
        }
        if (null !== $object->getIpcMode()) {
            $data['IpcMode'] = $object->getIpcMode();
        }
        if (null !== $object->getCgroup()) {
            $data['Cgroup'] = $object->getCgroup();
        }
        if (null !== $object->getLinks()) {
            $values_21 = [];
            foreach ($object->getLinks() as $value_21) {
                $values_21[] = $value_21;
            }
            $data['Links'] = $values_21;
        }
        if (null !== $object->getOomScoreAdj()) {
            $data['OomScoreAdj'] = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidMode()) {
            $data['PidMode'] = $object->getPidMode();
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getPublishAllPorts()) {
            $data['PublishAllPorts'] = $object->getPublishAllPorts();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
        }
        if (null !== $object->getSecurityOpt()) {
            $values_22 = [];
            foreach ($object->getSecurityOpt() as $value_22) {
                $values_22[] = $value_22;
            }
            $data['SecurityOpt'] = $values_22;
        }
        if (null !== $object->getStorageOpt()) {
            $values_23 = [];
            foreach ($object->getStorageOpt() as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $data['StorageOpt'] = $values_23;
        }
        if (null !== $object->getTmpfs()) {
            $values_24 = [];
            foreach ($object->getTmpfs() as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $data['Tmpfs'] = $values_24;
        }
        if (null !== $object->getUTSMode()) {
            $data['UTSMode'] = $object->getUTSMode();
        }
        if (null !== $object->getUsernsMode()) {
            $data['UsernsMode'] = $object->getUsernsMode();
        }
        if (null !== $object->getShmSize()) {
            $data['ShmSize'] = $object->getShmSize();
        }
        if (null !== $object->getSysctls()) {
            $values_25 = [];
            foreach ($object->getSysctls() as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $data['Sysctls'] = $values_25;
        }
        if (null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if (null !== $object->getConsoleSize()) {
            $values_26 = [];
            foreach ($object->getConsoleSize() as $value_26) {
                $values_26[] = $value_26;
            }
            $data['ConsoleSize'] = $values_26;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getMaskedPaths()) {
            $values_27 = [];
            foreach ($object->getMaskedPaths() as $value_27) {
                $values_27[] = $value_27;
            }
            $data['MaskedPaths'] = $values_27;
        }
        if (null !== $object->getReadonlyPaths()) {
            $values_28 = [];
            foreach ($object->getReadonlyPaths() as $value_28) {
                $values_28[] = $value_28;
            }
            $data['ReadonlyPaths'] = $values_28;
        }

        return $data;
    }
}
