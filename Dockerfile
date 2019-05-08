FROM jordan/icinga2

ENV NAGVIS 1.1.1

RUN apt-get update && apt-get install -y \
    mc sudo wget && \
    apt-get clean && rm -Rf /var/lib/apt/lists/*

RUN cd /usr/local/share/icingaweb2/modules && \
    wget https://github.com/Icinga/icingaweb2-module-nagvis/archive/v${NAGVIS}.tar.gz && \
    tar -zxvf v${NAGVIS}.tar.gz && \
    mv icingaweb2-module-nagvis-${NAGVIS} nagvis
