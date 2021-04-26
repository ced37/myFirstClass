<?

require_once 'Vehicle.php';

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    abstract function addVehicle(Vehicle $vehicle);

    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(int $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
}
