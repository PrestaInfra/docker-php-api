<?php

declare(strict_types=1);

namespace Docker\API\Model;

class BuildInfo
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $stream;
    /**
     * @var string|null
     */
    protected $error;
    /**
     * @var ErrorDetail|null
     */
    protected $errorDetail;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $progress;
    /**
     * @var ProgressDetail|null
     */
    protected $progressDetail;
    /**
     * Image ID or Digest.
     *
     * @var ImageID|null
     */
    protected $aux;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getStream(): ?string
    {
        return $this->stream;
    }

    public function setStream(?string $stream): self
    {
        $this->stream = $stream;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getErrorDetail(): ?ErrorDetail
    {
        return $this->errorDetail;
    }

    public function setErrorDetail(?ErrorDetail $errorDetail): self
    {
        $this->errorDetail = $errorDetail;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getProgress(): ?string
    {
        return $this->progress;
    }

    public function setProgress(?string $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function getProgressDetail(): ?ProgressDetail
    {
        return $this->progressDetail;
    }

    public function setProgressDetail(?ProgressDetail $progressDetail): self
    {
        $this->progressDetail = $progressDetail;

        return $this;
    }

    /**
     * Image ID or Digest.
     */
    public function getAux(): ?ImageID
    {
        return $this->aux;
    }

    /**
     * Image ID or Digest.
     */
    public function setAux(?ImageID $aux): self
    {
        $this->aux = $aux;

        return $this;
    }
}
